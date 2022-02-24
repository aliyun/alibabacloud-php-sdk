<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceCronScalerResponseBody\scaleJobs;
use AlibabaCloud\Tea\Model;

class DescribeServiceCronScalerResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $excludeDates;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scaleJobs[]
     */
    public $scaleJobs;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'excludeDates' => 'ExcludeDates',
        'requestId'    => 'RequestId',
        'scaleJobs'    => 'ScaleJobs',
        'serviceName'  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeDates) {
            $res['ExcludeDates'] = $this->excludeDates;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scaleJobs) {
            $res['ScaleJobs'] = [];
            if (null !== $this->scaleJobs && \is_array($this->scaleJobs)) {
                $n = 0;
                foreach ($this->scaleJobs as $item) {
                    $res['ScaleJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceCronScalerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeDates'])) {
            if (!empty($map['ExcludeDates'])) {
                $model->excludeDates = $map['ExcludeDates'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScaleJobs'])) {
            if (!empty($map['ScaleJobs'])) {
                $model->scaleJobs = [];
                $n                = 0;
                foreach ($map['ScaleJobs'] as $item) {
                    $model->scaleJobs[$n++] = null !== $item ? scaleJobs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
