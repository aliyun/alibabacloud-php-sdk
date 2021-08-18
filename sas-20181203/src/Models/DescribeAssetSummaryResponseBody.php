<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponseBody\assetsSummary;
use AlibabaCloud\Tea\Model;

class DescribeAssetSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var assetsSummary
     */
    public $assetsSummary;
    protected $_name = [
        'requestId'     => 'RequestId',
        'assetsSummary' => 'AssetsSummary',
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
        if (null !== $this->assetsSummary) {
            $res['AssetsSummary'] = null !== $this->assetsSummary ? $this->assetsSummary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AssetsSummary'])) {
            $model->assetsSummary = assetsSummary::fromMap($map['AssetsSummary']);
        }

        return $model;
    }
}
