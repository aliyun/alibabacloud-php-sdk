<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'Data',
        'object' => 'Object',
        'text' => 'Text',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['Data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->object) {
            $res['Object'] = $this->object;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                foreach ($map['Data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['Object'])) {
            $model->object = $map['Object'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
