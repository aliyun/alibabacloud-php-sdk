<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardResponseBody\diagnoseItem;
use AlibabaCloud\SDK\CC5G\V20220314\Models\GetDiagnoseResultForSingleCardResponseBody\errorResult;
use AlibabaCloud\Tea\Model;

class GetDiagnoseResultForSingleCardResponseBody extends Model
{
    /**
     * @example 1646100223024
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 10.176.78.61
     *
     * @var string
     */
    public $cardIp;

    /**
     * @example 106.14.175.4
     *
     * @var string
     */
    public $destination;

    /**
     * @example Domain
     *
     * @var string
     */
    public $destinationType;

    /**
     * @var diagnoseItem[]
     */
    public $diagnoseItem;

    /**
     * @example 1646100223264
     *
     * @var int
     */
    public $endTime;

    /**
     * @var errorResult[]
     */
    public $errorResult;

    /**
     * @example 89860477102170127555
     *
     * @var string
     */
    public $iccId;

    /**
     * @example 94032572-8758-575E-B306-86F59D1B826E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example failed
     *
     * @var string
     */
    public $status;

    /**
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'beginTime'                => 'BeginTime',
        'cardIp'                   => 'CardIp',
        'destination'              => 'Destination',
        'destinationType'          => 'DestinationType',
        'diagnoseItem'             => 'DiagnoseItem',
        'endTime'                  => 'EndTime',
        'errorResult'              => 'ErrorResult',
        'iccId'                    => 'IccId',
        'requestId'                => 'RequestId',
        'status'                   => 'Status',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cardIp) {
            $res['CardIp'] = $this->cardIp;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->diagnoseItem) {
            $res['DiagnoseItem'] = [];
            if (null !== $this->diagnoseItem && \is_array($this->diagnoseItem)) {
                $n = 0;
                foreach ($this->diagnoseItem as $item) {
                    $res['DiagnoseItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->errorResult) {
            $res['ErrorResult'] = [];
            if (null !== $this->errorResult && \is_array($this->errorResult)) {
                $n = 0;
                foreach ($this->errorResult as $item) {
                    $res['ErrorResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->iccId) {
            $res['IccId'] = $this->iccId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiagnoseResultForSingleCardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CardIp'])) {
            $model->cardIp = $map['CardIp'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['DiagnoseItem'])) {
            if (!empty($map['DiagnoseItem'])) {
                $model->diagnoseItem = [];
                $n                   = 0;
                foreach ($map['DiagnoseItem'] as $item) {
                    $model->diagnoseItem[$n++] = null !== $item ? diagnoseItem::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrorResult'])) {
            if (!empty($map['ErrorResult'])) {
                $model->errorResult = [];
                $n                  = 0;
                foreach ($map['ErrorResult'] as $item) {
                    $model->errorResult[$n++] = null !== $item ? errorResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IccId'])) {
            $model->iccId = $map['IccId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
