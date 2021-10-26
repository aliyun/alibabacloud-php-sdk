<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\errorCodeSamples;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\requestConfig;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\requestParameters;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiDocResponseBody\resultDescriptions;
use AlibabaCloud\Tea\Model;

class DescribeApiDocResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $resultType;

    /**
     * @var bool
     */
    public $disableInternet;

    /**
     * @var string
     */
    public $resultSample;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $forceNonceCheck;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $failResultSample;

    /**
     * @var string
     */
    public $authType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $deployedTime;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var requestConfig
     */
    public $requestConfig;

    /**
     * @var errorCodeSamples
     */
    public $errorCodeSamples;

    /**
     * @var resultDescriptions
     */
    public $resultDescriptions;

    /**
     * @var requestParameters
     */
    public $requestParameters;
    protected $_name = [
        'apiId'              => 'ApiId',
        'resultType'         => 'ResultType',
        'disableInternet'    => 'DisableInternet',
        'resultSample'       => 'ResultSample',
        'regionId'           => 'RegionId',
        'forceNonceCheck'    => 'ForceNonceCheck',
        'visibility'         => 'Visibility',
        'failResultSample'   => 'FailResultSample',
        'authType'           => 'AuthType',
        'requestId'          => 'RequestId',
        'groupId'            => 'GroupId',
        'groupName'          => 'GroupName',
        'description'        => 'Description',
        'deployedTime'       => 'DeployedTime',
        'stageName'          => 'StageName',
        'apiName'            => 'ApiName',
        'requestConfig'      => 'RequestConfig',
        'errorCodeSamples'   => 'ErrorCodeSamples',
        'resultDescriptions' => 'ResultDescriptions',
        'requestParameters'  => 'RequestParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->disableInternet) {
            $res['DisableInternet'] = $this->disableInternet;
        }
        if (null !== $this->resultSample) {
            $res['ResultSample'] = $this->resultSample;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->forceNonceCheck) {
            $res['ForceNonceCheck'] = $this->forceNonceCheck;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->failResultSample) {
            $res['FailResultSample'] = $this->failResultSample;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deployedTime) {
            $res['DeployedTime'] = $this->deployedTime;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->requestConfig) {
            $res['RequestConfig'] = null !== $this->requestConfig ? $this->requestConfig->toMap() : null;
        }
        if (null !== $this->errorCodeSamples) {
            $res['ErrorCodeSamples'] = null !== $this->errorCodeSamples ? $this->errorCodeSamples->toMap() : null;
        }
        if (null !== $this->resultDescriptions) {
            $res['ResultDescriptions'] = null !== $this->resultDescriptions ? $this->resultDescriptions->toMap() : null;
        }
        if (null !== $this->requestParameters) {
            $res['RequestParameters'] = null !== $this->requestParameters ? $this->requestParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['DisableInternet'])) {
            $model->disableInternet = $map['DisableInternet'];
        }
        if (isset($map['ResultSample'])) {
            $model->resultSample = $map['ResultSample'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ForceNonceCheck'])) {
            $model->forceNonceCheck = $map['ForceNonceCheck'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['FailResultSample'])) {
            $model->failResultSample = $map['FailResultSample'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeployedTime'])) {
            $model->deployedTime = $map['DeployedTime'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['RequestConfig'])) {
            $model->requestConfig = requestConfig::fromMap($map['RequestConfig']);
        }
        if (isset($map['ErrorCodeSamples'])) {
            $model->errorCodeSamples = errorCodeSamples::fromMap($map['ErrorCodeSamples']);
        }
        if (isset($map['ResultDescriptions'])) {
            $model->resultDescriptions = resultDescriptions::fromMap($map['ResultDescriptions']);
        }
        if (isset($map['RequestParameters'])) {
            $model->requestParameters = requestParameters::fromMap($map['RequestParameters']);
        }

        return $model;
    }
}
