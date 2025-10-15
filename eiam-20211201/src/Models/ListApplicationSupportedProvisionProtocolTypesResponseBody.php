<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationSupportedProvisionProtocolTypesResponseBody\applicationSupportedProvisionProtocolType;

class ListApplicationSupportedProvisionProtocolTypesResponseBody extends Model
{
    /**
     * @var applicationSupportedProvisionProtocolType
     */
    public $applicationSupportedProvisionProtocolType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationSupportedProvisionProtocolType' => 'ApplicationSupportedProvisionProtocolType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationSupportedProvisionProtocolType) {
            $this->applicationSupportedProvisionProtocolType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationSupportedProvisionProtocolType) {
            $res['ApplicationSupportedProvisionProtocolType'] = null !== $this->applicationSupportedProvisionProtocolType ? $this->applicationSupportedProvisionProtocolType->toArray($noStream) : $this->applicationSupportedProvisionProtocolType;
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
        if (isset($map['ApplicationSupportedProvisionProtocolType'])) {
            $model->applicationSupportedProvisionProtocolType = applicationSupportedProvisionProtocolType::fromMap($map['ApplicationSupportedProvisionProtocolType']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
