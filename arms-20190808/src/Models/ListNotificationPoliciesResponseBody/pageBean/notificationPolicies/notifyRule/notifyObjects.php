<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\notifyRule;

use AlibabaCloud\Dara\Model;

class notifyObjects extends Model
{
    /**
     * @var string[]
     */
    public $notifyChannels;

    /**
     * @var int
     */
    public $notifyObjectId;

    /**
     * @var string
     */
    public $notifyObjectName;

    /**
     * @var string
     */
    public $notifyObjectType;
    protected $_name = [
        'notifyChannels' => 'NotifyChannels',
        'notifyObjectId' => 'NotifyObjectId',
        'notifyObjectName' => 'NotifyObjectName',
        'notifyObjectType' => 'NotifyObjectType',
    ];

    public function validate()
    {
        if (\is_array($this->notifyChannels)) {
            Model::validateArray($this->notifyChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notifyChannels) {
            if (\is_array($this->notifyChannels)) {
                $res['NotifyChannels'] = [];
                $n1 = 0;
                foreach ($this->notifyChannels as $item1) {
                    $res['NotifyChannels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notifyObjectId) {
            $res['NotifyObjectId'] = $this->notifyObjectId;
        }

        if (null !== $this->notifyObjectName) {
            $res['NotifyObjectName'] = $this->notifyObjectName;
        }

        if (null !== $this->notifyObjectType) {
            $res['NotifyObjectType'] = $this->notifyObjectType;
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
        if (isset($map['NotifyChannels'])) {
            if (!empty($map['NotifyChannels'])) {
                $model->notifyChannels = [];
                $n1 = 0;
                foreach ($map['NotifyChannels'] as $item1) {
                    $model->notifyChannels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NotifyObjectId'])) {
            $model->notifyObjectId = $map['NotifyObjectId'];
        }

        if (isset($map['NotifyObjectName'])) {
            $model->notifyObjectName = $map['NotifyObjectName'];
        }

        if (isset($map['NotifyObjectType'])) {
            $model->notifyObjectType = $map['NotifyObjectType'];
        }

        return $model;
    }
}
