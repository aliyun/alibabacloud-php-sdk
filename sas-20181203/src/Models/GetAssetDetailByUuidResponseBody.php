<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetDetailByUuidResponseBody\assetDetail;
use AlibabaCloud\Tea\Model;

class GetAssetDetailByUuidResponseBody extends Model
{
    /**
     * @description The details of the server.
     *
     * @var assetDetail
     */
    public $assetDetail;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 4892B68B-47BC-5E56-B327-9C2ACC6C1C09
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
     * @return GetAssetDetailByUuidResponseBody
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
