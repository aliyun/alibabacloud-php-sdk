<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByMsgIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsMessageGetByMsgIdResponseBody\data\propertyList\messageProperty;

class propertyList extends Model
{
    /**
     * @var messageProperty[]
     */
    public $messageProperty;
    protected $_name = [
        'messageProperty' => 'MessageProperty',
    ];

    public function validate()
    {
        if (\is_array($this->messageProperty)) {
            Model::validateArray($this->messageProperty);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageProperty) {
            if (\is_array($this->messageProperty)) {
                $res['MessageProperty'] = [];
                $n1 = 0;
                foreach ($this->messageProperty as $item1) {
                    $res['MessageProperty'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MessageProperty'])) {
            if (!empty($map['MessageProperty'])) {
                $model->messageProperty = [];
                $n1 = 0;
                foreach ($map['MessageProperty'] as $item1) {
                    $model->messageProperty[$n1] = messageProperty::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
