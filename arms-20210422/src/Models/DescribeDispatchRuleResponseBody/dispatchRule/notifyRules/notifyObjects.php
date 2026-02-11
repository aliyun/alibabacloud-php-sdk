<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules;

use AlibabaCloud\Dara\Model;

class notifyObjects extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notifyObjectId;

    /**
     * @var string
     */
    public $notifyType;
    protected $_name = [
        'name' => 'Name',
        'notifyObjectId' => 'NotifyObjectId',
        'notifyType' => 'NotifyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notifyObjectId) {
            $res['NotifyObjectId'] = $this->notifyObjectId;
        }

        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NotifyObjectId'])) {
            $model->notifyObjectId = $map['NotifyObjectId'];
        }

        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }

        return $model;
    }
}
