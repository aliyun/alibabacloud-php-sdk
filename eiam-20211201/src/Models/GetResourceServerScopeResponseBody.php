<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetResourceServerScopeResponseBody\resourceServerScope;

class GetResourceServerScopeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceServerScope
     */
    public $resourceServerScope;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceServerScope' => 'ResourceServerScope',
    ];

    public function validate()
    {
        if (null !== $this->resourceServerScope) {
            $this->resourceServerScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceServerScope) {
            $res['ResourceServerScope'] = null !== $this->resourceServerScope ? $this->resourceServerScope->toArray($noStream) : $this->resourceServerScope;
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

        if (isset($map['ResourceServerScope'])) {
            $model->resourceServerScope = resourceServerScope::fromMap($map['ResourceServerScope']);
        }

        return $model;
    }
}
