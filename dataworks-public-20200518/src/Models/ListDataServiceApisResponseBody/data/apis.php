<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\wizardDetails;
use AlibabaCloud\Tea\Model;

class apis extends Model
{
    /**
     * @var int
     */
    public $timeout;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $apiId;

    /**
     * @var int
     */
    public $apiMode;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $responseContentType;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var int
     */
    public $visibleRange;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $folderId;

    /**
     * @var int
     */
    public $requestMethod;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var int[]
     */
    public $protocols;

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
    protected $_name = [
        'timeout'             => 'Timeout',
        'status'              => 'Status',
        'apiId'               => 'ApiId',
        'apiMode'             => 'ApiMode',
        'projectId'           => 'ProjectId',
        'responseContentType' => 'ResponseContentType',
        'creatorId'           => 'CreatorId',
        'visibleRange'        => 'VisibleRange',
        'modifiedTime'        => 'ModifiedTime',
        'operatorId'          => 'OperatorId',
        'groupId'             => 'GroupId',
        'description'         => 'Description',
        'folderId'            => 'FolderId',
        'requestMethod'       => 'RequestMethod',
        'createdTime'         => 'CreatedTime',
        'apiName'             => 'ApiName',
        'tenantId'            => 'TenantId',
        'apiPath'             => 'ApiPath',
        'protocols'           => 'Protocols',
        'registrationDetails' => 'RegistrationDetails',
        'scriptDetails'       => 'ScriptDetails',
        'wizardDetails'       => 'WizardDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiMode) {
            $res['ApiMode'] = $this->apiMode;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->visibleRange) {
            $res['VisibleRange'] = $this->visibleRange;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiMode'])) {
            $model->apiMode = $map['ApiMode'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['VisibleRange'])) {
            $model->visibleRange = $map['VisibleRange'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
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

        return $model;
    }
}
