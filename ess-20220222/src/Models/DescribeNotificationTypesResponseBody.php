<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeNotificationTypesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $notificationTypes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'notificationTypes' => 'NotificationTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->notificationTypes)) {
            Model::validateArray($this->notificationTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notificationTypes) {
            if (\is_array($this->notificationTypes)) {
                $res['NotificationTypes'] = [];
                $n1 = 0;
                foreach ($this->notificationTypes as $item1) {
                    $res['NotificationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NotificationTypes'])) {
            if (!empty($map['NotificationTypes'])) {
                $model->notificationTypes = [];
                $n1 = 0;
                foreach ($map['NotificationTypes'] as $item1) {
                    $model->notificationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
