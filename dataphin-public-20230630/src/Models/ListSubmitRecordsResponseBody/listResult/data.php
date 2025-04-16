<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSubmitRecordsResponseBody\listResult;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $changeType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $objectVersion;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $submitComment;

    /**
     * @var string
     */
    public $submitter;

    /**
     * @var string
     */
    public $submitterName;
    protected $_name = [
        'changeType' => 'ChangeType',
        'gmtCreate' => 'GmtCreate',
        'gmtModify' => 'GmtModify',
        'id' => 'Id',
        'nodeId' => 'NodeId',
        'objectId' => 'ObjectId',
        'objectName' => 'ObjectName',
        'objectType' => 'ObjectType',
        'objectVersion' => 'ObjectVersion',
        'projectId' => 'ProjectId',
        'submitComment' => 'SubmitComment',
        'submitter' => 'Submitter',
        'submitterName' => 'SubmitterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->objectVersion) {
            $res['ObjectVersion'] = $this->objectVersion;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->submitComment) {
            $res['SubmitComment'] = $this->submitComment;
        }

        if (null !== $this->submitter) {
            $res['Submitter'] = $this->submitter;
        }

        if (null !== $this->submitterName) {
            $res['SubmitterName'] = $this->submitterName;
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
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['ObjectVersion'])) {
            $model->objectVersion = $map['ObjectVersion'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['SubmitComment'])) {
            $model->submitComment = $map['SubmitComment'];
        }

        if (isset($map['Submitter'])) {
            $model->submitter = $map['Submitter'];
        }

        if (isset($map['SubmitterName'])) {
            $model->submitterName = $map['SubmitterName'];
        }

        return $model;
    }
}
