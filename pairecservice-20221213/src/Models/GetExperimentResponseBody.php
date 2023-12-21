<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetExperimentResponseBody extends Model
{
    /**
     * @example L1#EG1#E1
     *
     * @var string
     */
    public $aliasExperimentId;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $buckets;

    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 3
     *
     * @var string
     */
    public $debugCrowdId;

    /**
     * @example uid1,uid2,uid3
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
     * @example 3
     *
     * @var string
     */
    public $experimentGroupId;

    /**
     * @example 100
     *
     * @var int
     */
    public $flowPercent;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 3
     *
     * @var string
     */
    public $laboratoryId;

    /**
     * @example 3
     *
     * @var string
     */
    public $layerId;

    /**
     * @example experiment_test1
     *
     * @var string
     */
    public $name;

    /**
     * @description Id of the request
     *
     * @example 74D958EF-3598-56FA-8296-FF1575CE43DF
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
     * @example Baseline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasExperimentId' => 'AliasExperimentId',
        'buckets'           => 'Buckets',
        'config'            => 'Config',
        'debugCrowdId'      => 'DebugCrowdId',
        'debugUsers'        => 'DebugUsers',
        'description'       => 'Description',
        'experimentGroupId' => 'ExperimentGroupId',
        'flowPercent'       => 'FlowPercent',
        'gmtCreateTime'     => 'GmtCreateTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'laboratoryId'      => 'LaboratoryId',
        'layerId'           => 'LayerId',
        'name'              => 'Name',
        'requestId'         => 'RequestId',
        'sceneId'           => 'SceneId',
        'status'            => 'Status',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasExperimentId) {
            $res['AliasExperimentId'] = $this->aliasExperimentId;
        }
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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
        if (null !== $this->experimentGroupId) {
            $res['ExperimentGroupId'] = $this->experimentGroupId;
        }
        if (null !== $this->flowPercent) {
            $res['FlowPercent'] = $this->flowPercent;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->laboratoryId) {
            $res['LaboratoryId'] = $this->laboratoryId;
        }
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
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
     * @return GetExperimentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasExperimentId'])) {
            $model->aliasExperimentId = $map['AliasExperimentId'];
        }
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
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
        if (isset($map['ExperimentGroupId'])) {
            $model->experimentGroupId = $map['ExperimentGroupId'];
        }
        if (isset($map['FlowPercent'])) {
            $model->flowPercent = $map['FlowPercent'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['LaboratoryId'])) {
            $model->laboratoryId = $map['LaboratoryId'];
        }
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
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
