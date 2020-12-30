<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponseBody\assetDetail;
use AlibabaCloud\Tea\Model;

class DescribeAssetDetailByUuidResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var assetDetail
     */
    public $assetDetail;
    protected $_name = [
        'requestId'   => 'RequestId',
        'assetDetail' => 'AssetDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->assetDetail) {
            $res['AssetDetail'] = null !== $this->assetDetail ? $this->assetDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetDetailByUuidResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AssetDetail'])) {
            $model->assetDetail = assetDetail::fromMap($map['AssetDetail']);
        }

        return $model;
    }
}
