<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult;

use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @var string
     */
    public $projectStatusCode;

    /**
     * @var int
     */
    public $projectStatus;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectIdentifier;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var string
     */
    public $projectOwnerBaseId;
    protected $_name = [
        'projectStatusCode'  => 'ProjectStatusCode',
        'projectStatus'      => 'ProjectStatus',
        'projectName'        => 'ProjectName',
        'projectIdentifier'  => 'ProjectIdentifier',
        'projectId'          => 'ProjectId',
        'projectDescription' => 'ProjectDescription',
        'projectOwnerBaseId' => 'ProjectOwnerBaseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectStatusCode) {
            $res['ProjectStatusCode'] = $this->projectStatusCode;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
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
        if (isset($map['ProjectStatusCode'])) {
            $model->projectStatusCode = $map['ProjectStatusCode'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }

        return $model;
    }
}
