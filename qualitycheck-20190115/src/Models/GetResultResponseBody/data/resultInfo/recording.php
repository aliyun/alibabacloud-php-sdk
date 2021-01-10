<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Tea\Model;

class recording extends Model
{
    /**
     * @var string
     */
    public $remark13;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $primaryId;

    /**
     * @var string
     */
    public $remark12;

    /**
     * @var string
     */
    public $remark1;

    /**
     * @var string
     */
    public $remark7;

    /**
     * @var string
     */
    public $remark8;

    /**
     * @var string
     */
    public $remark2;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $remark9;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remark6;

    /**
     * @var string
     */
    public $remark10;

    /**
     * @var string
     */
    public $remark3;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $remark11;

    /**
     * @var string
     */
    public $remark4;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @var int
     */
    public $remark5;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $callTime;
    protected $_name = [
        'remark13'    => 'Remark13',
        'callee'      => 'Callee',
        'primaryId'   => 'PrimaryId',
        'remark12'    => 'Remark12',
        'remark1'     => 'Remark1',
        'remark7'     => 'Remark7',
        'remark8'     => 'Remark8',
        'remark2'     => 'Remark2',
        'callId'      => 'CallId',
        'remark9'     => 'Remark9',
        'name'        => 'Name',
        'remark6'     => 'Remark6',
        'remark10'    => 'Remark10',
        'remark3'     => 'Remark3',
        'business'    => 'Business',
        'url'         => 'Url',
        'remark11'    => 'Remark11',
        'remark4'     => 'Remark4',
        'callType'    => 'CallType',
        'caller'      => 'Caller',
        'duration'    => 'Duration',
        'dataSetName' => 'DataSetName',
        'remark5'     => 'Remark5',
        'id'          => 'Id',
        'callTime'    => 'CallTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remark13) {
            $res['Remark13'] = $this->remark13;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->remark12) {
            $res['Remark12'] = $this->remark12;
        }
        if (null !== $this->remark1) {
            $res['Remark1'] = $this->remark1;
        }
        if (null !== $this->remark7) {
            $res['Remark7'] = $this->remark7;
        }
        if (null !== $this->remark8) {
            $res['Remark8'] = $this->remark8;
        }
        if (null !== $this->remark2) {
            $res['Remark2'] = $this->remark2;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->remark9) {
            $res['Remark9'] = $this->remark9;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark6) {
            $res['Remark6'] = $this->remark6;
        }
        if (null !== $this->remark10) {
            $res['Remark10'] = $this->remark10;
        }
        if (null !== $this->remark3) {
            $res['Remark3'] = $this->remark3;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->remark11) {
            $res['Remark11'] = $this->remark11;
        }
        if (null !== $this->remark4) {
            $res['Remark4'] = $this->remark4;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }
        if (null !== $this->remark5) {
            $res['Remark5'] = $this->remark5;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recording
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remark13'])) {
            $model->remark13 = $map['Remark13'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['Remark12'])) {
            $model->remark12 = $map['Remark12'];
        }
        if (isset($map['Remark1'])) {
            $model->remark1 = $map['Remark1'];
        }
        if (isset($map['Remark7'])) {
            $model->remark7 = $map['Remark7'];
        }
        if (isset($map['Remark8'])) {
            $model->remark8 = $map['Remark8'];
        }
        if (isset($map['Remark2'])) {
            $model->remark2 = $map['Remark2'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['Remark9'])) {
            $model->remark9 = $map['Remark9'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark6'])) {
            $model->remark6 = $map['Remark6'];
        }
        if (isset($map['Remark10'])) {
            $model->remark10 = $map['Remark10'];
        }
        if (isset($map['Remark3'])) {
            $model->remark3 = $map['Remark3'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Remark11'])) {
            $model->remark11 = $map['Remark11'];
        }
        if (isset($map['Remark4'])) {
            $model->remark4 = $map['Remark4'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }
        if (isset($map['Remark5'])) {
            $model->remark5 = $map['Remark5'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CallTime'])) {
            $model->callTime = $map['CallTime'];
        }

        return $model;
    }
}
