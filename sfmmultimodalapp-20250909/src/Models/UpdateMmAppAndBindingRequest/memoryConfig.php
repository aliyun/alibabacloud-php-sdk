<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\UpdateMmAppAndBindingRequest\memoryConfig\attributes;

class memoryConfig extends Model
{
    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'attributes' => 'Attributes',
        'desc' => 'Desc',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                $n1 = 0;
                foreach ($this->attributes as $item1) {
                    $res['Attributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n1 = 0;
                foreach ($map['Attributes'] as $item1) {
                    $model->attributes[$n1] = attributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
