<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponseBody\assetDetail;
use AlibabaCloud\Tea\Model;

class DescribeAssetDetailByUuidResponseBody extends Model
{
    /**
     * @description The asset details.
     *
     * @var assetDetail
     */
    public $assetDetail;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 39031E31-6BBA-5C99-A870-D807E78918CD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetDetail' => 'AssetDetail',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetDetail) {
            $res['AssetDetail'] = null !== $this->assetDetail ? $this->assetDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AssetDetail'])) {
            $model->assetDetail = assetDetail::fromMap($map['AssetDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
