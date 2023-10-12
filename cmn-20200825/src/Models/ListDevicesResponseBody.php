<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDevicesResponseBody\devices;
use AlibabaCloud\Tea\Model;

class ListDevicesResponseBody extends Model
{
    /**
     * @example {"networkOnlineCount":11,"serverOnlineCount":7,"iotOnlineCount":2,"otherOnlineCount":0,"networkMaintainCount":0,"serverMaintainCount":0,"iotMaintainCount":0,"otherMaintainCount":0,"networkUdfStatusCount":5,"serverUdfStatusCount":0,"iotUdfStatusCount":0,"otherUdfStatusCount":0,"ratioNetworkCount":16,"ratioServerCount":3,"ratioIotCount":0,"ratioOtherCount":0}
     *
     * @var string
     */
    public $amountDetail;

    /**
     * @example 10
     *
     * @var int
     */
    public $amountUsed;

    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @example 1
     *
     * @var int
     */
    public $iotCoefficient;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var int
     */
    public $networkCoefficient;

    /**
     * @example 1
     *
     * @var int
     */
    public $networkMaintenanceCoefficient;

    /**
     * @example 10
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example 1
     *
     * @var int
     */
    public $otherCoefficient;

    /**
     * @example fdb2af01-bd56-4034-812b-f257f73b4690
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $serverCoefficient;

    /**
     * @example 1
     *
     * @var int
     */
    public $serverMaintenanceCoefficient;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'amountDetail'                  => 'AmountDetail',
        'amountUsed'                    => 'AmountUsed',
        'devices'                       => 'Devices',
        'iotCoefficient'                => 'IotCoefficient',
        'maxResults'                    => 'MaxResults',
        'networkCoefficient'            => 'NetworkCoefficient',
        'networkMaintenanceCoefficient' => 'NetworkMaintenanceCoefficient',
        'nextToken'                     => 'NextToken',
        'otherCoefficient'              => 'OtherCoefficient',
        'requestId'                     => 'RequestId',
        'serverCoefficient'             => 'ServerCoefficient',
        'serverMaintenanceCoefficient'  => 'ServerMaintenanceCoefficient',
        'totalCount'                    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amountDetail) {
            $res['AmountDetail'] = $this->amountDetail;
        }
        if (null !== $this->amountUsed) {
            $res['AmountUsed'] = $this->amountUsed;
        }
        if (null !== $this->devices) {
            $res['Devices'] = [];
            if (null !== $this->devices && \is_array($this->devices)) {
                $n = 0;
                foreach ($this->devices as $item) {
                    $res['Devices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iotCoefficient) {
            $res['IotCoefficient'] = $this->iotCoefficient;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->networkCoefficient) {
            $res['NetworkCoefficient'] = $this->networkCoefficient;
        }
        if (null !== $this->networkMaintenanceCoefficient) {
            $res['NetworkMaintenanceCoefficient'] = $this->networkMaintenanceCoefficient;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->otherCoefficient) {
            $res['OtherCoefficient'] = $this->otherCoefficient;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serverCoefficient) {
            $res['ServerCoefficient'] = $this->serverCoefficient;
        }
        if (null !== $this->serverMaintenanceCoefficient) {
            $res['ServerMaintenanceCoefficient'] = $this->serverMaintenanceCoefficient;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AmountDetail'])) {
            $model->amountDetail = $map['AmountDetail'];
        }
        if (isset($map['AmountUsed'])) {
            $model->amountUsed = $map['AmountUsed'];
        }
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n              = 0;
                foreach ($map['Devices'] as $item) {
                    $model->devices[$n++] = null !== $item ? devices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IotCoefficient'])) {
            $model->iotCoefficient = $map['IotCoefficient'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkCoefficient'])) {
            $model->networkCoefficient = $map['NetworkCoefficient'];
        }
        if (isset($map['NetworkMaintenanceCoefficient'])) {
            $model->networkMaintenanceCoefficient = $map['NetworkMaintenanceCoefficient'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OtherCoefficient'])) {
            $model->otherCoefficient = $map['OtherCoefficient'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerCoefficient'])) {
            $model->serverCoefficient = $map['ServerCoefficient'];
        }
        if (isset($map['ServerMaintenanceCoefficient'])) {
            $model->serverMaintenanceCoefficient = $map['ServerMaintenanceCoefficient'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
