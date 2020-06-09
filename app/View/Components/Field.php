<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\Translation\Translator;
use Illuminate\View\Component;
use function str_replace;
use function ucfirst;

class Field extends Component
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $help;
    /**
     * @var Translator
     */
    private $translator;

    /**
     * Create a new component instance.
     *
     * @param  Translator  $translator
     * @param  string|null  $name
     * @param  string|null  $type
     * @param  string|null  $help
     */
    public function __construct(Translator $translator, string $name = null, string $type = null, string $help = null)
    {
        $this->translator = $translator;

        $this->name = $name;
        $this->type = $type;
        $this->help = $help;
    }

    public function label()
    {
        if ($this->translator->has("validation.attributes.{$this->name}")){
            return $this->translator->get("validation.attributes.{$this->name}");
        }
        return Str::of($this->name)
            ->replace('_', ' ')
            ->ucfirst()
            ->finish(':');
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.field');
    }
}
