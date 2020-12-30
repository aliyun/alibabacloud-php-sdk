<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailResponseBody\ivrTrackingDetails\list_;

use AlibabaCloud\Tea\Model;

class ivrTrackingDetail extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $deviceID;

    /**
     * @var string
     */
    public $inputData;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var int
     */
    public $stopTime;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $outputData;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'status'        => 'Status',
        'deviceID'      => 'DeviceID',
        'inputData'     => 'InputData',
        'flowName'      => 'FlowName',
        'stopTime'      => 'StopTime',
        'calledNumber'  => 'CalledNumber',
        'startTime'     => 'StartTime',
        'description'   => 'Description',
        'nodeType'      => 'NodeType',
        'contactId'     => 'ContactId',
        'nodeName'      => 'NodeName',
        'callingNumber' => 'CallingNumber',
        'outputData'    => 'OutputData',
        'tenantId'      => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deviceID) {
            $res['DeviceID'] = $this->deviceID;
        }
        if (null !== $this->inputData) {
            $res['InputData'] = $this->inputData;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->outputData) {
            $res['OutputData'] = $this->outputData;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ivrTrackingDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeviceID'])) {
            $model->deviceID = $map['DeviceID'];
        }
        if (isset($map['InputData'])) {
            $model->inputData = $map['InputData'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['OutputData'])) {
            $model->outputData = $map['OutputData'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
