<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260622\Models\ConfirmRequest;

use AlibabaCloud\Dara\Model;

class toolCalls extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $modifiedInput;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'id',
        'modifiedInput' => 'modifiedInput',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->modifiedInput)) {
            Model::validateArray($this->modifiedInput);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modifiedInput) {
            if (\is_array($this->modifiedInput)) {
                $res['modifiedInput'] = [];
                foreach ($this->modifiedInput as $key1 => $value1) {
                    $res['modifiedInput'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modifiedInput'])) {
            if (!empty($map['modifiedInput'])) {
                $model->modifiedInput = [];
                foreach ($map['modifiedInput'] as $key1 => $value1) {
                    $model->modifiedInput[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
