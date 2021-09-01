<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponse\pageResult;

use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var int
     */
    public $projectStatus;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @var string
     */
    public $projectStatusCode;
    protected $_name = [
        'projectName'        => 'ProjectName',
        'projectIdentifier'  => 'ProjectIdentifier',
        'projectDescription' => 'ProjectDescription',
        'projectStatus'      => 'ProjectStatus',
        'projectId'          => 'ProjectId',
        'projectOwnerBaseId' => 'ProjectOwnerBaseId',
        'projectStatusCode'  => 'ProjectStatusCode',
    ];

    public function validate()
    {
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('projectIdentifier', $this->projectIdentifier, true);
        Model::validateRequired('projectDescription', $this->projectDescription, true);
        Model::validateRequired('projectStatus', $this->projectStatus, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('projectOwnerBaseId', $this->projectOwnerBaseId, true);
        Model::validateRequired('projectStatusCode', $this->projectStatusCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->projectStatusCode) {
            $res['ProjectStatusCode'] = $this->projectStatusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['ProjectStatusCode'])) {
            $model->projectStatusCode = $map['ProjectStatusCode'];
        }

        return $model;
    }
}
