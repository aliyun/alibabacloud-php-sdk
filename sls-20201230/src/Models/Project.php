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
     * @example LRS
     *
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $owner;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $projectName;

    /**
     * @var mixed[]
     */
    public $quota;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'         => 'createTime',
        'dataRedundancyType' => 'dataRedundancyType',
        'description'        => 'description',
        'lastModifyTime'     => 'lastModifyTime',
        'owner'              => 'owner',
        'projectName'        => 'projectName',
        'quota'              => 'quota',
        'region'             => 'region',
        'resourceGroupId'    => 'resourceGroupId',
        'status'             => 'status',
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
        if (null !== $this->dataRedundancyType) {
            $res['dataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['dataRedundancyType'])) {
            $model->dataRedundancyType = $map['dataRedundancyType'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
