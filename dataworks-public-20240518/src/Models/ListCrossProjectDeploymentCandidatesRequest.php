<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListCrossProjectDeploymentCandidatesRequest extends Model
{
    /**
     * @var string
     */
    public $changeType;

    /**
     * @var int
     */
    public $commitTimeFrom;

    /**
     * @var int
     */
    public $commitTimeTo;

    /**
     * @var string
     */
    public $commitUser;

    /**
     * @var int
     */
    public $deploymentEnvironmentId;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'changeType' => 'ChangeType',
        'commitTimeFrom' => 'CommitTimeFrom',
        'commitTimeTo' => 'CommitTimeTo',
        'commitUser' => 'CommitUser',
        'deploymentEnvironmentId' => 'DeploymentEnvironmentId',
        'keyword' => 'Keyword',
        'objectId' => 'ObjectId',
        'objectType' => 'ObjectType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
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

        if (null !== $this->commitTimeFrom) {
            $res['CommitTimeFrom'] = $this->commitTimeFrom;
        }

        if (null !== $this->commitTimeTo) {
            $res['CommitTimeTo'] = $this->commitTimeTo;
        }

        if (null !== $this->commitUser) {
            $res['CommitUser'] = $this->commitUser;
        }

        if (null !== $this->deploymentEnvironmentId) {
            $res['DeploymentEnvironmentId'] = $this->deploymentEnvironmentId;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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

        if (isset($map['CommitTimeFrom'])) {
            $model->commitTimeFrom = $map['CommitTimeFrom'];
        }

        if (isset($map['CommitTimeTo'])) {
            $model->commitTimeTo = $map['CommitTimeTo'];
        }

        if (isset($map['CommitUser'])) {
            $model->commitUser = $map['CommitUser'];
        }

        if (isset($map['DeploymentEnvironmentId'])) {
            $model->deploymentEnvironmentId = $map['DeploymentEnvironmentId'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
