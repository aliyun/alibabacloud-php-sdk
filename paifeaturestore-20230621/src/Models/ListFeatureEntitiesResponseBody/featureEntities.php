<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesResponseBody;

use AlibabaCloud\Dara\Model;

class featureEntities extends Model
{
    /**
     * @var string
     */
    public $featureEntityId;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $joinId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $parentFeatureEntityId;

    /**
     * @var string
     */
    public $parentFeatureEntityName;

    /**
     * @var string
     */
    public $parentJoinId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'featureEntityId' => 'FeatureEntityId',
        'gmtCreateTime' => 'GmtCreateTime',
        'joinId' => 'JoinId',
        'name' => 'Name',
        'owner' => 'Owner',
        'parentFeatureEntityId' => 'ParentFeatureEntityId',
        'parentFeatureEntityName' => 'ParentFeatureEntityName',
        'parentJoinId' => 'ParentJoinId',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureEntityId) {
            $res['FeatureEntityId'] = $this->featureEntityId;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->joinId) {
            $res['JoinId'] = $this->joinId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parentFeatureEntityId) {
            $res['ParentFeatureEntityId'] = $this->parentFeatureEntityId;
        }

        if (null !== $this->parentFeatureEntityName) {
            $res['ParentFeatureEntityName'] = $this->parentFeatureEntityName;
        }

        if (null !== $this->parentJoinId) {
            $res['ParentJoinId'] = $this->parentJoinId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
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
        if (isset($map['FeatureEntityId'])) {
            $model->featureEntityId = $map['FeatureEntityId'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['JoinId'])) {
            $model->joinId = $map['JoinId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ParentFeatureEntityId'])) {
            $model->parentFeatureEntityId = $map['ParentFeatureEntityId'];
        }

        if (isset($map['ParentFeatureEntityName'])) {
            $model->parentFeatureEntityName = $map['ParentFeatureEntityName'];
        }

        if (isset($map['ParentJoinId'])) {
            $model->parentJoinId = $map['ParentJoinId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
