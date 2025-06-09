<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class Project extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
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
    public $location;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var mixed[]
     */
    public $quota;

    /**
     * @var bool
     */
    public $recycleBinEnabled;

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
        'createTime' => 'createTime',
        'dataRedundancyType' => 'dataRedundancyType',
        'description' => 'description',
        'lastModifyTime' => 'lastModifyTime',
        'location' => 'location',
        'owner' => 'owner',
        'projectName' => 'projectName',
        'quota' => 'quota',
        'recycleBinEnabled' => 'recycleBinEnabled',
        'region' => 'region',
        'resourceGroupId' => 'resourceGroupId',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->quota)) {
            Model::validateArray($this->quota);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }

        if (null !== $this->quota) {
            if (\is_array($this->quota)) {
                $res['quota'] = [];
                foreach ($this->quota as $key1 => $value1) {
                    $res['quota'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->recycleBinEnabled) {
            $res['recycleBinEnabled'] = $this->recycleBinEnabled;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }

        if (isset($map['quota'])) {
            if (!empty($map['quota'])) {
                $model->quota = [];
                foreach ($map['quota'] as $key1 => $value1) {
                    $model->quota[$key1] = $value1;
                }
            }
        }

        if (isset($map['recycleBinEnabled'])) {
            $model->recycleBinEnabled = $map['recycleBinEnabled'];
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
