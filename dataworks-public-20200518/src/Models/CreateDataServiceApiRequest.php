<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataServiceApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiDescription;
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
     * @var int
     */
    public $folderId;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $protocols;
    /**
     * @var string
     */
    public $registrationDetails;
    /**
     * @var int
     */
    public $requestContentType;
    /**
     * @var int
     */
    public $requestMethod;
    /**
     * @var int
     */
    public $resourceGroupId;
    /**
     * @var int
     */
    public $responseContentType;
    /**
     * @var string
     */
    public $scriptDetails;
    /**
     * @var int
     */
    public $sqlMode;
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
     * @var string
     */
    public $wizardDetails;
    protected $_name = [
        'apiDescription'      => 'ApiDescription',
        'apiMode'             => 'ApiMode',
        'apiName'             => 'ApiName',
        'apiPath'             => 'ApiPath',
        'folderId'            => 'FolderId',
        'groupId'             => 'GroupId',
        'projectId'           => 'ProjectId',
        'protocols'           => 'Protocols',
        'registrationDetails' => 'RegistrationDetails',
        'requestContentType'  => 'RequestContentType',
        'requestMethod'       => 'RequestMethod',
        'resourceGroupId'     => 'ResourceGroupId',
        'responseContentType' => 'ResponseContentType',
        'scriptDetails'       => 'ScriptDetails',
        'sqlMode'             => 'SqlMode',
        'tenantId'            => 'TenantId',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'wizardDetails'       => 'WizardDetails',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiDescription) {
            $res['ApiDescription'] = $this->apiDescription;
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

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }

        if (null !== $this->registrationDetails) {
            $res['RegistrationDetails'] = $this->registrationDetails;
        }

        if (null !== $this->requestContentType) {
            $res['RequestContentType'] = $this->requestContentType;
        }

        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }

        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = $this->scriptDetails;
        }

        if (null !== $this->sqlMode) {
            $res['SqlMode'] = $this->sqlMode;
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

        if (null !== $this->wizardDetails) {
            $res['WizardDetails'] = $this->wizardDetails;
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
        if (isset($map['ApiDescription'])) {
            $model->apiDescription = $map['ApiDescription'];
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

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Protocols'])) {
            $model->protocols = $map['Protocols'];
        }

        if (isset($map['RegistrationDetails'])) {
            $model->registrationDetails = $map['RegistrationDetails'];
        }

        if (isset($map['RequestContentType'])) {
            $model->requestContentType = $map['RequestContentType'];
        }

        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }

        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = $map['ScriptDetails'];
        }

        if (isset($map['SqlMode'])) {
            $model->sqlMode = $map['SqlMode'];
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

        if (isset($map['WizardDetails'])) {
            $model->wizardDetails = $map['WizardDetails'];
        }

        return $model;
    }
}
