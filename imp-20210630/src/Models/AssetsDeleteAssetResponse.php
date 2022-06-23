<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AssetsDeleteAssetResponse extends Model
{
    /**
     * @description 资产信息
     *
     * @var CommonAsset
     */
    public $asset;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 响应状态
     *
     * @var RpcStatus
     */
    public $status;
    protected $_name = [
        'asset'     => 'Asset',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asset) {
            $res['Asset'] = null !== $this->asset ? $this->asset->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssetsDeleteAssetResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asset'])) {
            $model->asset = CommonAsset::fromMap($map['Asset']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = RpcStatus::fromMap($map['Status']);
        }

        return $model;
    }
}
