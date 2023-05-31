<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsResponseBody\suspHoneyPotStatisticsResponse;
use AlibabaCloud\Tea\Model;

class DescribeHoneyPotSuspStatisticsResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 9E3969FA-5ACC-4256-9FDE-BB6918CD0410
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the top 5 VPCs or assets for which alerts are most frequently generated.
     *
     * @var suspHoneyPotStatisticsResponse[]
     */
    public $suspHoneyPotStatisticsResponse;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'suspHoneyPotStatisticsResponse' => 'SuspHoneyPotStatisticsResponse',
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
        if (null !== $this->suspHoneyPotStatisticsResponse) {
            $res['SuspHoneyPotStatisticsResponse'] = [];
            if (null !== $this->suspHoneyPotStatisticsResponse && \is_array($this->suspHoneyPotStatisticsResponse)) {
                $n = 0;
                foreach ($this->suspHoneyPotStatisticsResponse as $item) {
                    $res['SuspHoneyPotStatisticsResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHoneyPotSuspStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuspHoneyPotStatisticsResponse'])) {
            if (!empty($map['SuspHoneyPotStatisticsResponse'])) {
                $model->suspHoneyPotStatisticsResponse = [];
                $n                                     = 0;
                foreach ($map['SuspHoneyPotStatisticsResponse'] as $item) {
                    $model->suspHoneyPotStatisticsResponse[$n++] = null !== $item ? suspHoneyPotStatisticsResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
