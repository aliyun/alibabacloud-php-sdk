<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\registrationDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\scriptDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\wizardDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var int
     */
    public $apiMode;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $requestMethod;

    /**
     * @var int
     */
    public $responseContentType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $visibleRange;

    /**
     * @var registrationDetails
     */
    public $registrationDetails;

    /**
     * @var scriptDetails
     */
    public $scriptDetails;

    /**
     * @var wizardDetails
     */
    public $wizardDetails;

    /**
     * @var int[]
     */
    public $protocols;
    protected $_name = [
        'apiId'               => 'ApiId',
        'apiMode'             => 'ApiMode',
        'apiName'             => 'ApiName',
        'apiPath'             => 'ApiPath',
        'createdTime'         => 'CreatedTime',
        'creatorId'           => 'CreatorId',
        'description'         => 'Description',
        'groupId'             => 'GroupId',
        'modifiedTime'        => 'ModifiedTime',
        'operatorId'          => 'OperatorId',
        'projectId'           => 'ProjectId',
        'requestMethod'       => 'RequestMethod',
        'responseContentType' => 'ResponseContentType',
        'status'              => 'Status',
        'tenantId'            => 'TenantId',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'registrationDetails' => 'RegistrationDetails',
        'scriptDetails'       => 'ScriptDetails',
        'wizardDetails'       => 'WizardDetails',
        'protocols'           => 'Protocols',
    ];

    public function validate()
    {
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('apiMode', $this->apiMode, true);
        Model::validateRequired('apiName', $this->apiName, true);
        Model::validateRequired('apiPath', $this->apiPath, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('operatorId', $this->operatorId, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('requestMethod', $this->requestMethod, true);
        Model::validateRequired('responseContentType', $this->responseContentType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('visibleRange', $this->visibleRange, true);
        Model::validateRequired('registrationDetails', $this->registrationDetails, true);
        Model::validateRequired('scriptDetails', $this->scriptDetails, true);
        Model::validateRequired('wizardDetails', $this->wizardDetails, true);
        Model::validateRequired('protocols', $this->protocols, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiMode) {
            $res['ApiMode'] = $this->apiMode;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->visibleRange) {
            $res['VisibleRange'] = $this->visibleRange;
        }
        if (null !== $this->registrationDetails) {
            $res['RegistrationDetails'] = null !== $this->registrationDetails ? $this->registrationDetails->toMap() : null;
        }
        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = null !== $this->scriptDetails ? $this->scriptDetails->toMap() : null;
        }
        if (null !== $this->wizardDetails) {
            $res['WizardDetails'] = null !== $this->wizardDetails ? $this->wizardDetails->toMap() : null;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiMode'])) {
            $model->apiMode = $map['ApiMode'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['VisibleRange'])) {
            $model->visibleRange = $map['VisibleRange'];
        }
        if (isset($map['RegistrationDetails'])) {
            $model->registrationDetails = registrationDetails::fromMap($map['RegistrationDetails']);
        }
        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = scriptDetails::fromMap($map['ScriptDetails']);
        }
        if (isset($map['WizardDetails'])) {
            $model->wizardDetails = wizardDetails::fromMap($map['WizardDetails']);
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }

        return $model;
    }
}
