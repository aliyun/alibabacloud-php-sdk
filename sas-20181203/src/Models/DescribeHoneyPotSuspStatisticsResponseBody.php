<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsResponseBody\suspHoneyPotStatisticsResponse;

class DescribeHoneyPotSuspStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var suspHoneyPotStatisticsResponse[]
     */
    public $suspHoneyPotStatisticsResponse;
    protected $_name = [
        'requestId' => 'RequestId',
        'suspHoneyPotStatisticsResponse' => 'SuspHoneyPotStatisticsResponse',
    ];

    public function validate()
    {
        if (\is_array($this->suspHoneyPotStatisticsResponse)) {
            Model::validateArray($this->suspHoneyPotStatisticsResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suspHoneyPotStatisticsResponse) {
            if (\is_array($this->suspHoneyPotStatisticsResponse)) {
                $res['SuspHoneyPotStatisticsResponse'] = [];
                $n1 = 0;
                foreach ($this->suspHoneyPotStatisticsResponse as $item1) {
                    $res['SuspHoneyPotStatisticsResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuspHoneyPotStatisticsResponse'])) {
            if (!empty($map['SuspHoneyPotStatisticsResponse'])) {
                $model->suspHoneyPotStatisticsResponse = [];
                $n1 = 0;
                foreach ($map['SuspHoneyPotStatisticsResponse'] as $item1) {
                    $model->suspHoneyPotStatisticsResponse[$n1] = suspHoneyPotStatisticsResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
