<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetProtocolMountTargetResponseBody\protocolMountTarget;

class GetProtocolMountTargetResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var protocolMountTarget
     */
    public $protocolMountTarget;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken' => 'NextToken',
        'protocolMountTarget' => 'ProtocolMountTarget',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->protocolMountTarget) {
            $this->protocolMountTarget->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->protocolMountTarget) {
            $res['ProtocolMountTarget'] = null !== $this->protocolMountTarget ? $this->protocolMountTarget->toArray($noStream) : $this->protocolMountTarget;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ProtocolMountTarget'])) {
            $model->protocolMountTarget = protocolMountTarget::fromMap($map['ProtocolMountTarget']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
