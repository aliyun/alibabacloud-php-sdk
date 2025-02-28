<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLaboratoriesResponseBody;

use AlibabaCloud\Dara\Model;

class laboratories extends Model
{
    /**
     * @var int
     */
    public $bucketCount;
    /**
     * @var string
     */
    public $bucketType;
    /**
     * @var string
     */
    public $buckets;
    /**
     * @var string
     */
    public $crowdId;
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
    public $environment;
    /**
     * @var string
     */
    public $filter;
    /**
     * @var string
     */
    public $laboratoryId;
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
        'bucketCount'  => 'BucketCount',
        'bucketType'   => 'BucketType',
        'buckets'      => 'Buckets',
        'crowdId'      => 'CrowdId',
        'debugCrowdId' => 'DebugCrowdId',
        'debugUsers'   => 'DebugUsers',
        'description'  => 'Description',
        'environment'  => 'Environment',
        'filter'       => 'Filter',
        'laboratoryId' => 'LaboratoryId',
        'name'         => 'Name',
        'sceneId'      => 'SceneId',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->laboratoryId) {
            $res['LaboratoryId'] = $this->laboratoryId;
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

        if (isset($map['LaboratoryId'])) {
            $model->laboratoryId = $map['LaboratoryId'];
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
