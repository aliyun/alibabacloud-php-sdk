<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponseBody\statisticsDetails;
use AlibabaCloud\Tea\Model;

class DescribeExposedStatisticsDetailResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var statisticsDetails[]
     */
    public $statisticsDetails;
    protected $_name = [
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
        'statisticsDetails' => 'StatisticsDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statisticsDetails) {
            $res['StatisticsDetails'] = [];
            if (null !== $this->statisticsDetails && \is_array($this->statisticsDetails)) {
                $n = 0;
                foreach ($this->statisticsDetails as $item) {
                    $res['StatisticsDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedStatisticsDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatisticsDetails'])) {
            if (!empty($map['StatisticsDetails'])) {
                $model->statisticsDetails = [];
                $n                        = 0;
                foreach ($map['StatisticsDetails'] as $item) {
                    $model->statisticsDetails[$n++] = null !== $item ? statisticsDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
