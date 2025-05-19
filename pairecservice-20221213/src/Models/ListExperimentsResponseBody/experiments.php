<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListExperimentsResponseBody;

use AlibabaCloud\Dara\Model;

class experiments extends Model
{
    /**
     * @var string
     */
    public $aliasExperimentId;

    /**
     * @var string
     */
    public $buckets;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $debugCrowdId;

    /**
     * @var string
     */
    public $debugUsers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $experimentGroupId;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var int
     */
    public $flowPercent;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $laboratoryId;

    /**
     * @var string
     */
    public $layerId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aliasExperimentId' => 'AliasExperimentId',
        'buckets' => 'Buckets',
        'config' => 'Config',
        'debugCrowdId' => 'DebugCrowdId',
        'debugUsers' => 'DebugUsers',
        'description' => 'Description',
        'experimentGroupId' => 'ExperimentGroupId',
        'experimentId' => 'ExperimentId',
        'flowPercent' => 'FlowPercent',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'laboratoryId' => 'LaboratoryId',
        'layerId' => 'LayerId',
        'name' => 'Name',
        'sceneId' => 'SceneId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
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
