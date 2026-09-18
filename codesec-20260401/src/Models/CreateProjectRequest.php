<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectRequest\engines;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\CreateProjectRequest\source;

class CreateProjectRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var engines
     */
    public $engines;

    /**
     * @var string
     */
    public $instructionPrompt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var source
     */
    public $source;
    protected $_name = [
        'description' => 'description',
        'engines' => 'engines',
        'instructionPrompt' => 'instructionPrompt',
        'name' => 'name',
        'source' => 'source',
    ];

    public function validate()
    {
        if (null !== $this->engines) {
            $this->engines->validate();
        }
        if (null !== $this->source) {
            $this->source->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->engines) {
            $res['engines'] = null !== $this->engines ? $this->engines->toArray($noStream) : $this->engines;
        }

        if (null !== $this->instructionPrompt) {
            $res['instructionPrompt'] = $this->instructionPrompt;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = null !== $this->source ? $this->source->toArray($noStream) : $this->source;
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
            $model->engines = engines::fromMap($map['engines']);
        }

        if (isset($map['instructionPrompt'])) {
            $model->instructionPrompt = $map['instructionPrompt'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = source::fromMap($map['source']);
        }

        return $model;
    }
}
