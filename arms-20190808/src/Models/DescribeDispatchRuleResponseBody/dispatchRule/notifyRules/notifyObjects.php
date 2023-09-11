<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\notifyRules;

use AlibabaCloud\Tea\Model;

class notifyObjects extends Model
{
    /**
     * @description The name of the contact or contact group.
     *
     * @example JohnDoe
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the contact or contact group.
     *
     * @example 1
     *
     * @var string
     */
    public $notifyObjectId;

    /**
     * @description The type of the alert contact. Valid values:
     *
     * - `CONTACT_GROUP`: contact group
     * @example CONTACT
     *
     * @var string
     */
    public $notifyType;
    protected $_name = [
        'name'           => 'Name',
        'notifyObjectId' => 'NotifyObjectId',
        'notifyType'     => 'NotifyType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return notifyObjects
     */
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
