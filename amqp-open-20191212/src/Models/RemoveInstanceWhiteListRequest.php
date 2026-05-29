<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class RemoveInstanceWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $whiteListItemId;

    /**
     * @var int
     */
    public $whiteListType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'whiteListItemId' => 'whiteListItemId',
        'whiteListType' => 'whiteListType',
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

        if (null !== $this->whiteListItemId) {
            $res['whiteListItemId'] = $this->whiteListItemId;
        }

        if (null !== $this->whiteListType) {
            $res['whiteListType'] = $this->whiteListType;
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

        if (isset($map['whiteListItemId'])) {
            $model->whiteListItemId = $map['whiteListItemId'];
        }

        if (isset($map['whiteListType'])) {
            $model->whiteListType = $map['whiteListType'];
        }

        return $model;
    }
}
