<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidResponseBody\assetDetail;

class DescribeAssetDetailByUuidResponseBody extends Model
{
    /**
     * @var assetDetail
     */
    public $assetDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetDetail' => 'AssetDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->assetDetail) {
            $this->assetDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetDetail) {
            $res['AssetDetail'] = null !== $this->assetDetail ? $this->assetDetail->toArray($noStream) : $this->assetDetail;
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
        if (isset($map['AssetDetail'])) {
            $model->assetDetail = assetDetail::fromMap($map['AssetDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
