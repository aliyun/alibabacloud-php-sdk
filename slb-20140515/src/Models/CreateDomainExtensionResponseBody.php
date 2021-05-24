<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainExtensionResponseBody extends Model
{
    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainExtensionId;
    protected $_name = [
        'listenerPort'      => 'ListenerPort',
        'requestId'         => 'RequestId',
        'domainExtensionId' => 'DomainExtensionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainExtensionId) {
            $res['DomainExtensionId'] = $this->domainExtensionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainExtensionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainExtensionId'])) {
            $model->domainExtensionId = $map['DomainExtensionId'];
        }

        return $model;
    }
}
