<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class AddInstanceWhiteListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $whiteListItemShrink;

    /**
     * @var int
     */
    public $whiteListType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'whiteListItemShrink' => 'WhiteListItem',
        'whiteListType' => 'WhiteListType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->whiteListItemShrink) {
            $res['WhiteListItem'] = $this->whiteListItemShrink;
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
            $model->whiteListItemShrink = $map['WhiteListItem'];
        }

        if (isset($map['WhiteListType'])) {
            $model->whiteListType = $map['WhiteListType'];
        }

        return $model;
    }
}
