<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class OpenStructIdpSyncRecord extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $idpRawJson;

    /**
     * @var string
     */
    public $idpResourceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $saseRawJson;

    /**
     * @var string
     */
    public $saseResourceId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $syncRecordId;

    /**
     * @var string
     */
    public $syncTaskId;

    /**
     * @var string
     */
    public $timeUnix;
    protected $_name = [
        'action' => 'Action',
        'idpRawJson' => 'IdpRawJson',
        'idpResourceId' => 'IdpResourceId',
        'name' => 'Name',
        'recordType' => 'RecordType',
        'saseRawJson' => 'SaseRawJson',
        'saseResourceId' => 'SaseResourceId',
        'success' => 'Success',
        'syncRecordId' => 'SyncRecordId',
        'syncTaskId' => 'SyncTaskId',
        'timeUnix' => 'TimeUnix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->idpRawJson) {
            $res['IdpRawJson'] = $this->idpRawJson;
        }

        if (null !== $this->idpResourceId) {
            $res['IdpResourceId'] = $this->idpResourceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->saseRawJson) {
            $res['SaseRawJson'] = $this->saseRawJson;
        }

        if (null !== $this->saseResourceId) {
            $res['SaseResourceId'] = $this->saseResourceId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->syncRecordId) {
            $res['SyncRecordId'] = $this->syncRecordId;
        }

        if (null !== $this->syncTaskId) {
            $res['SyncTaskId'] = $this->syncTaskId;
        }

        if (null !== $this->timeUnix) {
            $res['TimeUnix'] = $this->timeUnix;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['IdpRawJson'])) {
            $model->idpRawJson = $map['IdpRawJson'];
        }

        if (isset($map['IdpResourceId'])) {
            $model->idpResourceId = $map['IdpResourceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['SaseRawJson'])) {
            $model->saseRawJson = $map['SaseRawJson'];
        }

        if (isset($map['SaseResourceId'])) {
            $model->saseResourceId = $map['SaseResourceId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['SyncRecordId'])) {
            $model->syncRecordId = $map['SyncRecordId'];
        }

        if (isset($map['SyncTaskId'])) {
            $model->syncTaskId = $map['SyncTaskId'];
        }

        if (isset($map['TimeUnix'])) {
            $model->timeUnix = $map['TimeUnix'];
        }

        return $model;
    }
}
