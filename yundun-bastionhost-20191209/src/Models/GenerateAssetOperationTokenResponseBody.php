<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GenerateAssetOperationTokenResponseBody\assetOperationToken;
use AlibabaCloud\Tea\Model;

class GenerateAssetOperationTokenResponseBody extends Model
{
    /**
     * @var assetOperationToken
     */
    public $assetOperationToken;

    /**
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetOperationToken' => 'AssetOperationToken',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetOperationToken) {
            $res['AssetOperationToken'] = null !== $this->assetOperationToken ? $this->assetOperationToken->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateAssetOperationTokenResponseBody
     */
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
