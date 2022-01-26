<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetDiagnoseResultForSingleCardResponseBody\diagnoseItem;
use AlibabaCloud\SDK\IoTCC\V20210513\Models\GetDiagnoseResultForSingleCardResponseBody\errorResult;
use AlibabaCloud\Tea\Model;

class GetDiagnoseResultForSingleCardResponseBody extends Model
{
    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $cardIp;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var diagnoseItem[]
     */
    public $diagnoseItem;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var errorResult[]
     */
    public $errorResult;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'beginTime'           => 'BeginTime',
        'cardIp'              => 'CardIp',
        'destination'         => 'Destination',
        'diagnoseItem'        => 'DiagnoseItem',
        'endTime'             => 'EndTime',
        'errorResult'         => 'ErrorResult',
        'iccid'               => 'Iccid',
        'ioTCloudConnectorId' => 'IoTCloudConnectorId',
        'requestId'           => 'RequestId',
        'status'              => 'Status',
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
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
