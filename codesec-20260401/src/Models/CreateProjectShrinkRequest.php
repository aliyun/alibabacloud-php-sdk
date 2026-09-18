<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $enginesShrink;

    /**
     * @var string
     */
    public $instructionPrompt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceShrink;
    protected $_name = [
        'description' => 'description',
        'enginesShrink' => 'engines',
        'instructionPrompt' => 'instructionPrompt',
        'name' => 'name',
        'sourceShrink' => 'source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enginesShrink) {
            $res['engines'] = $this->enginesShrink;
        }

        if (null !== $this->instructionPrompt) {
            $res['instructionPrompt'] = $this->instructionPrompt;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sourceShrink) {
            $res['source'] = $this->sourceShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['engines'])) {
            $model->enginesShrink = $map['engines'];
        }

        if (isset($map['instructionPrompt'])) {
            $model->instructionPrompt = $map['instructionPrompt'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->sourceShrink = $map['source'];
        }

        return $model;
    }
}
