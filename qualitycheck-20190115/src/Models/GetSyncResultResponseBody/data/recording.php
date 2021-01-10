<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class recording extends Model
{
    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $remark3;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $primaryId;

    /**
     * @var string
     */
    public $remark1;

    /**
     * @var int
     */
    public $callType;

    /**
     * @var string
     */
    public $remark2;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $dataSetName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $callTime;
    protected $_name = [
        'callee'      => 'Callee',
        'business'    => 'Business',
        'remark3'     => 'Remark3',
        'url'         => 'Url',
        'primaryId'   => 'PrimaryId',
        'remark1'     => 'Remark1',
        'callType'    => 'CallType',
        'remark2'     => 'Remark2',
        'caller'      => 'Caller',
        'callId'      => 'CallId',
        'duration'    => 'Duration',
        'dataSetName' => 'DataSetName',
        'name'        => 'Name',
        'id'          => 'Id',
        'callTime'    => 'CallTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->remark3) {
            $res['Remark3'] = $this->remark3;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->remark1) {
            $res['Remark1'] = $this->remark1;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->remark2) {
            $res['Remark2'] = $this->remark2;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['Remark3'])) {
            $model->remark3 = $map['Remark3'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['Remark1'])) {
            $model->remark1 = $map['Remark1'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['Remark2'])) {
            $model->remark2 = $map['Remark2'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
