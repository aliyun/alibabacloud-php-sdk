<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListModelFeaturesResponseBody;

use AlibabaCloud\Tea\Model;

class modelFeatures extends Model
{
    /**
     * @example 2023-07-04T14:46:22.227+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2023-07-04T14:46:22.227+08:00
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example label_table_1
     *
     * @var string
     */
    public $labelTableName;

    /**
     * @example 3
     *
     * @var string
     */
    public $modelFeatureId;

    /**
     * @example model_feature1
     *
     * @var string
     */
    public $name;

    /**
     * @example 1231243253****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 5
     *
     * @var string
     */
    public $projectId;

    /**
     * @example project1
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labelTableName'  => 'LabelTableName',
        'modelFeatureId'  => 'ModelFeatureId',
        'name'            => 'Name',
        'owner'           => 'Owner',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labelTableName) {
            $res['LabelTableName'] = $this->labelTableName;
        }
        if (null !== $this->modelFeatureId) {
            $res['ModelFeatureId'] = $this->modelFeatureId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['LabelTableName'])) {
            $model->labelTableName = $map['LabelTableName'];
        }
        if (isset($map['ModelFeatureId'])) {
            $model->modelFeatureId = $map['ModelFeatureId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
