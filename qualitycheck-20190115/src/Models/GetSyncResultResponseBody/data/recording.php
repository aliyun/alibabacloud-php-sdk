<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSyncResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class recording extends Model
{
    /**
     * @var string
     */
    public $business;

    /**
     * @example xxx
     *
     * @var string
     */
    public $callId;

    /**
     * @example 1563967699000
     *
     * @var string
     */
    public $callTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $callType;

    /**
     * @example 1888888***
     *
     * @var string
     */
    public $callee;

    /**
     * @example 0108888****
     *
     * @var string
     */
    public $caller;

    /**
     * @example xxx
     *
     * @var string
     */
    public $dataSetName;

    /**
     * @example 232
     *
     * @var int
     */
    public $duration;

    /**
     * @example 120
     *
     * @var int
     */
    public $durationAudio;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example 123123.wav
     *
     * @var string
     */
    public $name;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $primaryId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $remark1;

    /**
     * @example xxx
     *
     * @var string
     */
    public $remark2;

    /**
     * @example xxx
     *
     * @var string
     */
    public $remark3;

    /**
     * @example http://aliyun.com/xxx.wav
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'business'      => 'Business',
        'callId'        => 'CallId',
        'callTime'      => 'CallTime',
        'callType'      => 'CallType',
        'callee'        => 'Callee',
        'caller'        => 'Caller',
        'dataSetName'   => 'DataSetName',
        'duration'      => 'Duration',
        'durationAudio' => 'DurationAudio',
        'id'            => 'Id',
        'name'          => 'Name',
        'primaryId'     => 'PrimaryId',
        'remark1'       => 'Remark1',
        'remark2'       => 'Remark2',
        'remark3'       => 'Remark3',
        'url'           => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->dataSetName) {
            $res['DataSetName'] = $this->dataSetName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->durationAudio) {
            $res['DurationAudio'] = $this->durationAudio;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryId) {
            $res['PrimaryId'] = $this->primaryId;
        }
        if (null !== $this->remark1) {
            $res['Remark1'] = $this->remark1;
        }
        if (null !== $this->remark2) {
            $res['Remark2'] = $this->remark2;
        }
        if (null !== $this->remark3) {
            $res['Remark3'] = $this->remark3;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['CallTime'])) {
            $model->callTime = $map['CallTime'];
        }
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['DataSetName'])) {
            $model->dataSetName = $map['DataSetName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['DurationAudio'])) {
            $model->durationAudio = $map['DurationAudio'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryId'])) {
            $model->primaryId = $map['PrimaryId'];
        }
        if (isset($map['Remark1'])) {
            $model->remark1 = $map['Remark1'];
        }
        if (isset($map['Remark2'])) {
            $model->remark2 = $map['Remark2'];
        }
        if (isset($map['Remark3'])) {
            $model->remark3 = $map['Remark3'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
