<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeUrlObservationDataResponseBody\urlDetailData;

class DescribeUrlObservationDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var urlDetailData[]
     */
    public $urlDetailData;
    protected $_name = [
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'urlDetailData' => 'UrlDetailData',
    ];

    public function validate()
    {
        if (\is_array($this->urlDetailData)) {
            Model::validateArray($this->urlDetailData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->urlDetailData) {
            if (\is_array($this->urlDetailData)) {
                $res['UrlDetailData'] = [];
                $n1 = 0;
                foreach ($this->urlDetailData as $item1) {
                    $res['UrlDetailData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UrlDetailData'])) {
            if (!empty($map['UrlDetailData'])) {
                $model->urlDetailData = [];
                $n1 = 0;
                foreach ($map['UrlDetailData'] as $item1) {
                    $model->urlDetailData[$n1] = urlDetailData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
