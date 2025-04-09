<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptRecordingResponseBody;

use AlibabaCloud\Dara\Model;

class scriptRecordings extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $gmtUpload;

    /**
     * @var string
     */
    public $innerId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recordingContent;

    /**
     * @var int
     */
    public $recordingDuration;

    /**
     * @var string
     */
    public $recordingName;

    /**
     * @var string
     */
    public $refId;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $stateExtend;

    /**
     * @var string
     */
    public $storageUuid;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'gmtUpload' => 'GmtUpload',
        'innerId' => 'InnerId',
        'instanceId' => 'InstanceId',
        'recordingContent' => 'RecordingContent',
        'recordingDuration' => 'RecordingDuration',
        'recordingName' => 'RecordingName',
        'refId' => 'RefId',
        'scriptId' => 'ScriptId',
        'state' => 'State',
        'stateExtend' => 'StateExtend',
        'storageUuid' => 'StorageUuid',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->refId) {
            $res['RefId'] = $this->refId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RefId'])) {
            $model->refId = $map['RefId'];
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
