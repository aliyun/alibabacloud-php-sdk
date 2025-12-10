<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class GetResourceGroupNotificationSettingResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resourceGroupNotificationEnableStatus;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceGroupNotificationEnableStatus' => 'ResourceGroupNotificationEnableStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupNotificationEnableStatus) {
            $res['ResourceGroupNotificationEnableStatus'] = $this->resourceGroupNotificationEnableStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupNotificationEnableStatus'])) {
            $model->resourceGroupNotificationEnableStatus = $map['ResourceGroupNotificationEnableStatus'];
        }

        return $model;
    }
}
