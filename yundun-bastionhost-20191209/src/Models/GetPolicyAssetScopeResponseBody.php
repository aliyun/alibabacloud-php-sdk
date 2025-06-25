<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyAssetScopeResponseBody\assetScope;

class GetPolicyAssetScopeResponseBody extends Model
{
    /**
     * @var assetScope
     */
    public $assetScope;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetScope' => 'AssetScope',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->assetScope) {
            $this->assetScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetScope) {
            $res['AssetScope'] = null !== $this->assetScope ? $this->assetScope->toArray($noStream) : $this->assetScope;
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
        if (isset($map['AssetScope'])) {
            $model->assetScope = assetScope::fromMap($map['AssetScope']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
