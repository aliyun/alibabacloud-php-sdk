<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class InputVariable extends Model
{
    /**
     * @var string
     */
    public $defaultJson;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $nullable;

    /**
     * @var bool
     */
    public $sensitive;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'defaultJson' => 'defaultJson',
        'description' => 'description',
        'name'        => 'name',
        'nullable'    => 'nullable',
        'sensitive'   => 'sensitive',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultJson) {
            $res['defaultJson'] = $this->defaultJson;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nullable) {
            $res['nullable'] = $this->nullable;
        }
        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InputVariable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['defaultJson'])) {
            $model->defaultJson = $map['defaultJson'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nullable'])) {
            $model->nullable = $map['nullable'];
        }
        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
