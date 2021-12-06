<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Httpdns\V20160201\Models;

use AlibabaCloud\SDK\Httpdns\V20160201\Models\GetResolveCountSummaryResponseBody\resolveSummary;
use AlibabaCloud\Tea\Model;

class GetResolveCountSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resolveSummary
     */
    public $resolveSummary;
    protected $_name = [
        'requestId'      => 'RequestId',
        'resolveSummary' => 'ResolveSummary',
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
        if (null !== $this->resolveSummary) {
            $res['ResolveSummary'] = null !== $this->resolveSummary ? $this->resolveSummary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResolveCountSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResolveSummary'])) {
            $model->resolveSummary = resolveSummary::fromMap($map['ResolveSummary']);
        }

        return $model;
    }
}
