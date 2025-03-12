<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionApplicationResponseBody\applicationProvisionInfo;
use AlibabaCloud\Tea\Model;

class ProvisionApplicationResponseBody extends Model
{
    /**
     * @description The installation information of the application.
     *
     * @var applicationProvisionInfo
     */
    public $applicationProvisionInfo;

    /**
     * @description The request ID.
     *
     * @example C8AE06ED-9593-5BF9-8D4A-68D5DDCC90AB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisionInfo' => 'ApplicationProvisionInfo',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationProvisionInfo) {
            $res['ApplicationProvisionInfo'] = null !== $this->applicationProvisionInfo ? $this->applicationProvisionInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProvisionApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationProvisionInfo'])) {
            $model->applicationProvisionInfo = applicationProvisionInfo::fromMap($map['ApplicationProvisionInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
