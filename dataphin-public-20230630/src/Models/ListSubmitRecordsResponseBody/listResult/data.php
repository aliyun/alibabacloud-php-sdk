<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSubmitRecordsResponseBody\listResult;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $changeType;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $gmtModify;

    /**
     * @example 1241844456
     *
     * @var int
     */
    public $id;

    /**
     * @example n_123456
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $objectId;

    /**
     * @example 对象A
     *
     * @var string
     */
    public $objectName;

    /**
     * @example 2024-10-10 10:00:00
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 1
     *
     * @var string
     */
    public $objectVersion;

    /**
     * @example 1241844456
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 提交信息
     *
     * @var string
     */
    public $submitComment;

    /**
     * @example 307999999
     *
     * @var string
     */
    public $submitter;

    /**
     * @example 张三
     *
     * @var string
     */
    public $submitterName;
    protected $_name = [
        'changeType'    => 'ChangeType',
        'gmtCreate'     => 'GmtCreate',
        'gmtModify'     => 'GmtModify',
        'id'            => 'Id',
        'nodeId'        => 'NodeId',
        'objectId'      => 'ObjectId',
        'objectName'    => 'ObjectName',
        'objectType'    => 'ObjectType',
        'objectVersion' => 'ObjectVersion',
        'projectId'     => 'ProjectId',
        'submitComment' => 'SubmitComment',
        'submitter'     => 'Submitter',
        'submitterName' => 'SubmitterName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
