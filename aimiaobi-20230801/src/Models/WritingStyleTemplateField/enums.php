<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateField;

use AlibabaCloud\Dara\Model;

class enums extends Model
{
    /**
     * @var string[]
     */
    public $cascadingFields;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'cascadingFields' => 'CascadingFields',
        'key' => 'Key',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->cascadingFields)) {
            Model::validateArray($this->cascadingFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cascadingFields) {
            if (\is_array($this->cascadingFields)) {
                $res['CascadingFields'] = [];
                $n1 = 0;
                foreach ($this->cascadingFields as $item1) {
                    $res['CascadingFields'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CascadingFields'])) {
            if (!empty($map['CascadingFields'])) {
                $model->cascadingFields = [];
                $n1 = 0;
                foreach ($map['CascadingFields'] as $item1) {
                    $model->cascadingFields[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
