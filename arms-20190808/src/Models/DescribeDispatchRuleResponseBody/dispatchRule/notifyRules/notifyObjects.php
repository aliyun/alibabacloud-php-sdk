<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules;

use AlibabaCloud\Tea\Model;

class notifyObjects extends Model
{
    /**
     * @var string
     */
    public $notifyObjectId;

    /**
     * @var string
     */
    public $notifyType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'notifyObjectId' => 'NotifyObjectId',
        'notifyType'     => 'NotifyType',
        'name'           => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyObjectId) {
            $res['NotifyObjectId'] = $this->notifyObjectId;
        }
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyObjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyObjectId'])) {
            $model->notifyObjectId = $map['NotifyObjectId'];
        }
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
