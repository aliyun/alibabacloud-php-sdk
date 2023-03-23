<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Project extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $projectDesc;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectOwner;

    /**
     * @var string
     */
    public $projectStatus;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'createTime'      => 'createTime',
        'lastModifyTime'  => 'lastModifyTime',
        'projectDesc'     => 'projectDesc',
        'projectName'     => 'projectName',
        'projectOwner'    => 'projectOwner',
        'projectStatus'   => 'projectStatus',
        'region'          => 'region',
        'resourceGroupId' => 'resourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->projectDesc) {
            $res['projectDesc'] = $this->projectDesc;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->projectOwner) {
            $res['projectOwner'] = $this->projectOwner;
        }
        if (null !== $this->projectStatus) {
            $res['projectStatus'] = $this->projectStatus;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['projectDesc'])) {
            $model->projectDesc = $map['projectDesc'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['projectOwner'])) {
            $model->projectOwner = $map['projectOwner'];
        }
        if (isset($map['projectStatus'])) {
            $model->projectStatus = $map['projectStatus'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}
