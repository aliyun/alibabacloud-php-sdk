<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedStatisticsDetailResponseBody\statisticsDetails;

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
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
        'statisticsDetails' => 'StatisticsDetails',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->statisticsDetails)) {
            Model::validateArray($this->statisticsDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statisticsDetails) {
            if (\is_array($this->statisticsDetails)) {
                $res['StatisticsDetails'] = [];
                $n1 = 0;
                foreach ($this->statisticsDetails as $item1) {
                    $res['StatisticsDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StatisticsDetails'])) {
            if (!empty($map['StatisticsDetails'])) {
                $model->statisticsDetails = [];
                $n1 = 0;
                foreach ($map['StatisticsDetails'] as $item1) {
                    $model->statisticsDetails[$n1] = statisticsDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
