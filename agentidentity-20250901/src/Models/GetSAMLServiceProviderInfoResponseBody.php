<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetSAMLServiceProviderInfoResponseBody\SAMLServiceProviderInfo;

class GetSAMLServiceProviderInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SAMLServiceProviderInfo
     */
    public $SAMLServiceProviderInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'SAMLServiceProviderInfo' => 'SAMLServiceProviderInfo',
    ];

    public function validate()
    {
        if (null !== $this->SAMLServiceProviderInfo) {
            $this->SAMLServiceProviderInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SAMLServiceProviderInfo) {
            $res['SAMLServiceProviderInfo'] = null !== $this->SAMLServiceProviderInfo ? $this->SAMLServiceProviderInfo->toArray($noStream) : $this->SAMLServiceProviderInfo;
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

        if (isset($map['SAMLServiceProviderInfo'])) {
            $model->SAMLServiceProviderInfo = SAMLServiceProviderInfo::fromMap($map['SAMLServiceProviderInfo']);
        }

        return $model;
    }
}
