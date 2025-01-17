<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponseBody\assetsSummary;

class DescribeAssetSummaryResponseBody extends Model
{
    /**
     * @var assetsSummary
     */
    public $assetsSummary;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetsSummary' => 'AssetsSummary',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->assetsSummary) {
            $this->assetsSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsSummary) {
            $res['AssetsSummary'] = null !== $this->assetsSummary ? $this->assetsSummary->toArray($noStream) : $this->assetsSummary;
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
        if (isset($map['AssetsSummary'])) {
            $model->assetsSummary = assetsSummary::fromMap($map['AssetsSummary']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
