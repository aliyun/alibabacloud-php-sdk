<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class AddInstanceWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $whiteListItem;

    /**
     * @var int
     */
    public $whiteListType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'whiteListItem' => 'WhiteListItem',
        'whiteListType' => 'WhiteListType',
    ];

    public function validate()
    {
        if (\is_array($this->whiteListItem)) {
            Model::validateArray($this->whiteListItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->whiteListItem) {
            if (\is_array($this->whiteListItem)) {
                $res['WhiteListItem'] = [];
                $n1 = 0;
                foreach ($this->whiteListItem as $item1) {
                    $res['WhiteListItem'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->whiteListType) {
            $res['WhiteListType'] = $this->whiteListType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['WhiteListItem'])) {
            if (!empty($map['WhiteListItem'])) {
                $model->whiteListItem = [];
                $n1 = 0;
                foreach ($map['WhiteListItem'] as $item1) {
                    $model->whiteListItem[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WhiteListType'])) {
            $model->whiteListType = $map['WhiteListType'];
        }

        return $model;
    }
}
