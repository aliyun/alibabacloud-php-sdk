<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class scriptRecordings extends Model
{
    /**
     * @example 2022-07-11T07:51:49.000+0000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1654601332000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 1654601332000
     *
     * @var int
     */
    public $gmtUpload;

    /**
     * @example 1
     *
     * @var string
     */
    public $innerId;

    /**
     * @example ff0fb845-9f90-46d3-9716-d36b8a1e753a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recordingContent;

    /**
     * @example 10
     *
     * @var int
     */
    public $recordingDuration;

    /**
     * @example hello.wav
     *
     * @var string
     */
    public $recordingName;

    /**
     * @example 6019b692-fd9e-4adb-8877-cef6a297b234
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 8
     *
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $stateExtend;

    /**
     * @example 393674ed-3b5d-db44-0fda-615d05210178
     *
     * @var string
     */
    public $storageUuid;

    /**
     * @example 0a77386e-6402-8d23-4adf-6ec13b3f404d
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'gmtUpload'         => 'GmtUpload',
        'innerId'           => 'InnerId',
        'instanceId'        => 'InstanceId',
        'recordingContent'  => 'RecordingContent',
        'recordingDuration' => 'RecordingDuration',
        'recordingName'     => 'RecordingName',
        'scriptId'          => 'ScriptId',
        'state'             => 'State',
        'stateExtend'       => 'StateExtend',
        'storageUuid'       => 'StorageUuid',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtUpload) {
            $res['GmtUpload'] = $this->gmtUpload;
        }
        if (null !== $this->innerId) {
            $res['InnerId'] = $this->innerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->recordingContent) {
            $res['RecordingContent'] = $this->recordingContent;
        }
        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
        }
        if (null !== $this->recordingName) {
            $res['RecordingName'] = $this->recordingName;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->stateExtend) {
            $res['StateExtend'] = $this->stateExtend;
        }
        if (null !== $this->storageUuid) {
            $res['StorageUuid'] = $this->storageUuid;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptRecordings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtUpload'])) {
            $model->gmtUpload = $map['GmtUpload'];
        }
        if (isset($map['InnerId'])) {
            $model->innerId = $map['InnerId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RecordingContent'])) {
            $model->recordingContent = $map['RecordingContent'];
        }
        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
        }
        if (isset($map['RecordingName'])) {
            $model->recordingName = $map['RecordingName'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StateExtend'])) {
            $model->stateExtend = $map['StateExtend'];
        }
        if (isset($map['StorageUuid'])) {
            $model->storageUuid = $map['StorageUuid'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
