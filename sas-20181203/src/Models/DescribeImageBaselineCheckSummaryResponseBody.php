<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponseBody\baselineResultSummary;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineCheckSummaryResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageBaselineCheckSummaryResponseBody extends Model
{
    /**
     * @description An array that consists of the check results of image baselines.
     *
     * @var baselineResultSummary[]
     */
    public $baselineResultSummary;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5BD95679-D63A-4151-97D0-188432F4A57
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'baselineResultSummary' => 'BaselineResultSummary',
        'pageInfo'              => 'PageInfo',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineResultSummary) {
            $res['BaselineResultSummary'] = [];
            if (null !== $this->baselineResultSummary && \is_array($this->baselineResultSummary)) {
                $n = 0;
                foreach ($this->baselineResultSummary as $item) {
                    $res['BaselineResultSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageBaselineCheckSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineResultSummary'])) {
            if (!empty($map['BaselineResultSummary'])) {
                $model->baselineResultSummary = [];
                $n                            = 0;
                foreach ($map['BaselineResultSummary'] as $item) {
                    $model->baselineResultSummary[$n++] = null !== $item ? baselineResultSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
