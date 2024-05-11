<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bucketType;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $crowIds;

    /**
     * @var string
     */
    public $debugUsers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $flow;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'bucketType'  => 'BucketType',
        'condition'   => 'Condition',
        'crowIds'     => 'CrowIds',
        'debugUsers'  => 'DebugUsers',
        'description' => 'Description',
        'flow'        => 'Flow',
        'name'        => 'Name',
        'projectId'   => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketType) {
            $res['BucketType'] = $this->bucketType;
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->crowIds) {
            $res['CrowIds'] = $this->crowIds;
        }
        if (null !== $this->debugUsers) {
            $res['DebugUsers'] = $this->debugUsers;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketType'])) {
            $model->bucketType = $map['BucketType'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['CrowIds'])) {
            $model->crowIds = $map['CrowIds'];
        }
        if (isset($map['DebugUsers'])) {
            $model->debugUsers = $map['DebugUsers'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
