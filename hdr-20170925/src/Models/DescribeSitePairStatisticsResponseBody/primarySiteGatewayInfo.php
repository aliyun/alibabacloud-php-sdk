<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class primarySiteGatewayInfo extends Model
{
    /**
     * @example gw-000bzkmmlwgzptnzsdnh
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example 1642562996
     *
     * @var int
     */
    public $heartbeatedTime;

    /**
     * @example connected
     *
     * @var string
     */
    public $status;

    /**
     * @example 3.7.3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'gatewayId'       => 'GatewayId',
        'heartbeatedTime' => 'HeartbeatedTime',
        'status'          => 'Status',
        'version'         => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->heartbeatedTime) {
            $res['HeartbeatedTime'] = $this->heartbeatedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return primarySiteGatewayInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['HeartbeatedTime'])) {
            $model->heartbeatedTime = $map['HeartbeatedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
