<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogShipperStatusResponseBody\logShipperStatus;

class DescribeLogShipperStatusResponseBody extends Model
{
    /**
     * @var logShipperStatus
     */
    public $logShipperStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logShipperStatus' => 'LogShipperStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->logShipperStatus) {
            $this->logShipperStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logShipperStatus) {
            $res['LogShipperStatus'] = null !== $this->logShipperStatus ? $this->logShipperStatus->toArray($noStream) : $this->logShipperStatus;
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
        if (isset($map['LogShipperStatus'])) {
            $model->logShipperStatus = logShipperStatus::fromMap($map['LogShipperStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
