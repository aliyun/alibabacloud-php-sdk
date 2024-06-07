<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateLaboratoryRequest extends Model
{
    /**
     * @example 24
     *
     * @var int
     */
    public $bucketCount;

    /**
     * @description This parameter is required.
     *
     * @example UidHash
     *
     * @var string
     */
    public $bucketType;

    /**
     * @example 1,2,3,10-20
     *
     * @var string
     */
    public $buckets;

    /**
     * @example 3
     *
     * @var string
     */
    public $debugCrowdId;

    /**
     * @example 1124512470******,1124512471******,1124512472******
     *
     * @var string
     */
    public $debugUsers;

    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example Daily
     *
     * @var string
     */
    public $environment;

    /**
     * @example filter=xxx
     *
     * @var string
     */
    public $filter;

    /**
     * @description This parameter is required.
     *
     * @example pairec-cn-abcdefg1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example laboratory1
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description This parameter is required.
     *
     * @example Base
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bucketCount'  => 'BucketCount',
        'bucketType'   => 'BucketType',
        'buckets'      => 'Buckets',
        'debugCrowdId' => 'DebugCrowdId',
        'debugUsers'   => 'DebugUsers',
        'description'  => 'Description',
        'environment'  => 'Environment',
        'filter'       => 'Filter',
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'sceneId'      => 'SceneId',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketCount) {
            $res['BucketCount'] = $this->bucketCount;
        }
        if (null !== $this->bucketType) {
            $res['BucketType'] = $this->bucketType;
        }
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }
        if (null !== $this->debugCrowdId) {
            $res['DebugCrowdId'] = $this->debugCrowdId;
        }
        if (null !== $this->debugUsers) {
            $res['DebugUsers'] = $this->debugUsers;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLaboratoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketCount'])) {
            $model->bucketCount = $map['BucketCount'];
        }
        if (isset($map['BucketType'])) {
            $model->bucketType = $map['BucketType'];
        }
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }
        if (isset($map['DebugCrowdId'])) {
            $model->debugCrowdId = $map['DebugCrowdId'];
        }
        if (isset($map['DebugUsers'])) {
            $model->debugUsers = $map['DebugUsers'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
