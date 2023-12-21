<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetLaboratoryResponseBody extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $bucketCount;

    /**
     * @example Filter
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
    public $crowdId;

    /**
     * @example 3
     *
     * @var string
     */
    public $debugCrowdId;

    /**
     * @example user1,user2,user3
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
     * @example laboratory1
     *
     * @var string
     */
    public $name;

    /**
     * @description Id of the request
     *
     * @example 1C0898E5-9220-5443-B2D9-445FF0688215
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example Offline
     *
     * @var string
     */
    public $status;

    /**
     * @example Base
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bucketCount'  => 'BucketCount',
        'bucketType'   => 'BucketType',
        'buckets'      => 'Buckets',
        'crowdId'      => 'CrowdId',
        'debugCrowdId' => 'DebugCrowdId',
        'debugUsers'   => 'DebugUsers',
        'description'  => 'Description',
        'environment'  => 'Environment',
        'filter'       => 'Filter',
        'name'         => 'Name',
        'requestId'    => 'RequestId',
        'sceneId'      => 'SceneId',
        'status'       => 'Status',
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
        if (null !== $this->crowdId) {
            $res['CrowdId'] = $this->crowdId;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLaboratoryResponseBody
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
        if (isset($map['CrowdId'])) {
            $model->crowdId = $map['CrowdId'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
