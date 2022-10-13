<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListDiagnoseInfoForSingleCardResponseBody;

use AlibabaCloud\Tea\Model;

class diagnoseInfo extends Model
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
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $diagnoseTaskId;

    /**
     * @var int
     */
    public $diagnoseTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $iccId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'beginTime'                => 'BeginTime',
        'cardIp'                   => 'CardIp',
        'destination'              => 'Destination',
        'destinationType'          => 'DestinationType',
        'diagnoseTaskId'           => 'DiagnoseTaskId',
        'diagnoseTime'             => 'DiagnoseTime',
        'endTime'                  => 'EndTime',
        'iccId'                    => 'IccId',
        'source'                   => 'Source',
        'sourceType'               => 'SourceType',
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
        if (null !== $this->diagnoseTaskId) {
            $res['DiagnoseTaskId'] = $this->diagnoseTaskId;
        }
        if (null !== $this->diagnoseTime) {
            $res['DiagnoseTime'] = $this->diagnoseTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iccId) {
            $res['IccId'] = $this->iccId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
     * @return diagnoseInfo
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
        if (isset($map['DiagnoseTaskId'])) {
            $model->diagnoseTaskId = $map['DiagnoseTaskId'];
        }
        if (isset($map['DiagnoseTime'])) {
            $model->diagnoseTime = $map['DiagnoseTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IccId'])) {
            $model->iccId = $map['IccId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
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
