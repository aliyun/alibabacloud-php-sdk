<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserWafLogStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $logRegionId;
    /**
     * @var string
     */
    public $logStatus;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $statusUpdateTime;
    protected $_name = [
        'logRegionId'      => 'LogRegionId',
        'logStatus'        => 'LogStatus',
        'requestId'        => 'RequestId',
        'statusUpdateTime' => 'StatusUpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logRegionId) {
            $res['LogRegionId'] = $this->logRegionId;
        }

        if (null !== $this->logStatus) {
            $res['LogStatus'] = $this->logStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statusUpdateTime) {
            $res['StatusUpdateTime'] = $this->statusUpdateTime;
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
        if (isset($map['LogRegionId'])) {
            $model->logRegionId = $map['LogRegionId'];
        }

        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StatusUpdateTime'])) {
            $model->statusUpdateTime = $map['StatusUpdateTime'];
        }

        return $model;
    }
}
