<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class GetFeatureResponseBody extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $experimentName;

    /**
     * @var string
     */
    public $experimentOwner;

    /**
     * @var string
     */
    public $experimentVersionId;

    /**
     * @var string
     */
    public $experimentVersionName;

    /**
     * @var string
     */
    public $featureId;

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
    public $releaseTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'condition'             => 'Condition',
        'config'                => 'Config',
        'domainId'              => 'DomainId',
        'domainName'            => 'DomainName',
        'experimentId'          => 'ExperimentId',
        'experimentName'        => 'ExperimentName',
        'experimentOwner'       => 'ExperimentOwner',
        'experimentVersionId'   => 'ExperimentVersionId',
        'experimentVersionName' => 'ExperimentVersionName',
        'featureId'             => 'FeatureId',
        'gmtCreateTime'         => 'GmtCreateTime',
        'gmtModifiedTime'       => 'GmtModifiedTime',
        'name'                  => 'Name',
        'projectId'             => 'ProjectId',
        'projectName'           => 'ProjectName',
        'releaseTime'           => 'ReleaseTime',
        'requestId'             => 'RequestId',
        'status'                => 'Status',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->experimentName) {
            $res['ExperimentName'] = $this->experimentName;
        }
        if (null !== $this->experimentOwner) {
            $res['ExperimentOwner'] = $this->experimentOwner;
        }
        if (null !== $this->experimentVersionId) {
            $res['ExperimentVersionId'] = $this->experimentVersionId;
        }
        if (null !== $this->experimentVersionName) {
            $res['ExperimentVersionName'] = $this->experimentVersionName;
        }
        if (null !== $this->featureId) {
            $res['FeatureId'] = $this->featureId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
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
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFeatureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['ExperimentName'])) {
            $model->experimentName = $map['ExperimentName'];
        }
        if (isset($map['ExperimentOwner'])) {
            $model->experimentOwner = $map['ExperimentOwner'];
        }
        if (isset($map['ExperimentVersionId'])) {
            $model->experimentVersionId = $map['ExperimentVersionId'];
        }
        if (isset($map['ExperimentVersionName'])) {
            $model->experimentVersionName = $map['ExperimentVersionName'];
        }
        if (isset($map['FeatureId'])) {
            $model->featureId = $map['FeatureId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
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
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
