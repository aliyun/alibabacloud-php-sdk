<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class GetDomainResponseBody extends Model
{
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
    public $condition;

    /**
     * @var string
     */
    public $crowdIds;

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
    public $domainId;

    /**
     * @var int
     */
    public $flow;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var bool
     */
    public $isDefaultDomain;

    /**
     * @var string
     */
    public $layerId;

    /**
     * @var string
     */
    public $layerName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'bucketType'      => 'BucketType',
        'buckets'         => 'Buckets',
        'condition'       => 'Condition',
        'crowdIds'        => 'CrowdIds',
        'debugUsers'      => 'DebugUsers',
        'description'     => 'Description',
        'domainId'        => 'DomainId',
        'flow'            => 'Flow',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'isDefaultDomain' => 'IsDefaultDomain',
        'layerId'         => 'LayerId',
        'layerName'       => 'LayerName',
        'name'            => 'Name',
        'projectId'       => 'ProjectId',
        'projectName'     => 'ProjectName',
        'requestId'       => 'RequestId',
        'workspaceId'     => 'WorkspaceId',
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
        if (null !== $this->buckets) {
            $res['Buckets'] = $this->buckets;
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->crowdIds) {
            $res['CrowdIds'] = $this->crowdIds;
        }
        if (null !== $this->debugUsers) {
            $res['DebugUsers'] = $this->debugUsers;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->isDefaultDomain) {
            $res['IsDefaultDomain'] = $this->isDefaultDomain;
        }
        if (null !== $this->layerId) {
            $res['LayerId'] = $this->layerId;
        }
        if (null !== $this->layerName) {
            $res['LayerName'] = $this->layerName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketType'])) {
            $model->bucketType = $map['BucketType'];
        }
        if (isset($map['Buckets'])) {
            $model->buckets = $map['Buckets'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['CrowdIds'])) {
            $model->crowdIds = $map['CrowdIds'];
        }
        if (isset($map['DebugUsers'])) {
            $model->debugUsers = $map['DebugUsers'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['IsDefaultDomain'])) {
            $model->isDefaultDomain = $map['IsDefaultDomain'];
        }
        if (isset($map['LayerId'])) {
            $model->layerId = $map['LayerId'];
        }
        if (isset($map['LayerName'])) {
            $model->layerName = $map['LayerName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
