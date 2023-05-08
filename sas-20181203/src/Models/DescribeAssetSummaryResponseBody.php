<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponseBody\assetsSummary;
use AlibabaCloud\Tea\Model;

class DescribeAssetSummaryResponseBody extends Model
{
    /**
     * @var assetsSummary
     */
    public $assetsSummary;

    /**
     * @example 0FA7F1F4-488D-52CA-9BFC-3E47793B49D1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetsSummary' => 'AssetsSummary',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetsSummary) {
            $res['AssetsSummary'] = null !== $this->assetsSummary ? $this->assetsSummary->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AssetsSummary'])) {
            $model->assetsSummary = assetsSummary::fromMap($map['AssetsSummary']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
