<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GenerateAssetOperationTokenResponseBody\assetOperationToken;

class GenerateAssetOperationTokenResponseBody extends Model
{
    /**
     * @var assetOperationToken
     */
    public $assetOperationToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetOperationToken' => 'AssetOperationToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->assetOperationToken) {
            $this->assetOperationToken->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetOperationToken) {
            $res['AssetOperationToken'] = null !== $this->assetOperationToken ? $this->assetOperationToken->toArray($noStream) : $this->assetOperationToken;
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
        if (isset($map['AssetOperationToken'])) {
            $model->assetOperationToken = assetOperationToken::fromMap($map['AssetOperationToken']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
