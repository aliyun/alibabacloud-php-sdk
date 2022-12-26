<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLogShipperStatusResponseBody\logShipperStatus;
use AlibabaCloud\Tea\Model;

class DescribeLogShipperStatusResponseBody extends Model
{
    /**
     * @var logShipperStatus
     */
    public $logShipperStatus;

    /**
     * @example 24A20733-10A0-4AF6-BE6B-E3322413****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logShipperStatus' => 'LogShipperStatus',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logShipperStatus) {
            $res['LogShipperStatus'] = null !== $this->logShipperStatus ? $this->logShipperStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogShipperStatusResponseBody
     */
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
