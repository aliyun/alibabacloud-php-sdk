<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureEntitiesResponseBody;

use AlibabaCloud\Tea\Model;

class featureEntities extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $featureEntityId;

    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example user_id
     *
     * @var string
     */
    public $joinId;

    /**
     * @example feature_entity_1
     *
     * @var string
     */
    public $name;

    /**
     * @example 123456789****
     *
     * @var string
     */
    public $owner;

    /**
     * @example 3
     *
     * @var string
     */
    public $projectId;

    /**
     * @example project_1
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'featureEntityId' => 'FeatureEntityId',
        'gmtCreateTime'   => 'GmtCreateTime',
        'joinId'          => 'JoinId',
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
     * @return featureEntities
     */
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
