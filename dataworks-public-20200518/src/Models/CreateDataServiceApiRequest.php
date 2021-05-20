<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataServiceApiRequest extends Model
{
    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $apiMode;

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
    public $timeout;

    /**
     * @var int
     */
    public $visibleRange;

    /**
     * @var string
     */
    public $protocols;

    /**
     * @var string
     */
    public $wizardDetails;

    /**
     * @var string
     */
    public $scriptDetails;

    /**
     * @var string
     */
    public $registrationDetails;

    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var string
     */
    public $apiDescription;

    /**
     * @var int
     */
    public $folderId;
    protected $_name = [
        'tenantId'            => 'TenantId',
        'projectId'           => 'ProjectId',
        'apiName'             => 'ApiName',
        'groupId'             => 'GroupId',
        'apiMode'             => 'ApiMode',
        'requestMethod'       => 'RequestMethod',
        'responseContentType' => 'ResponseContentType',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'protocols'           => 'Protocols',
        'wizardDetails'       => 'WizardDetails',
        'scriptDetails'       => 'ScriptDetails',
        'registrationDetails' => 'RegistrationDetails',
        'apiPath'             => 'ApiPath',
        'apiDescription'      => 'ApiDescription',
        'folderId'            => 'FolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiMode) {
            $res['ApiMode'] = $this->apiMode;
        }
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->visibleRange) {
            $res['VisibleRange'] = $this->visibleRange;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->wizardDetails) {
            $res['WizardDetails'] = $this->wizardDetails;
        }
        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = $this->scriptDetails;
        }
        if (null !== $this->registrationDetails) {
            $res['RegistrationDetails'] = $this->registrationDetails;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }
        if (null !== $this->apiDescription) {
            $res['ApiDescription'] = $this->apiDescription;
        }
        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataServiceApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiMode'])) {
            $model->apiMode = $map['ApiMode'];
        }
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['VisibleRange'])) {
            $model->visibleRange = $map['VisibleRange'];
        }
        if (isset($map['Protocols'])) {
            $model->protocols = $map['Protocols'];
        }
        if (isset($map['WizardDetails'])) {
            $model->wizardDetails = $map['WizardDetails'];
        }
        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = $map['ScriptDetails'];
        }
        if (isset($map['RegistrationDetails'])) {
            $model->registrationDetails = $map['RegistrationDetails'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }
        if (isset($map['ApiDescription'])) {
            $model->apiDescription = $map['ApiDescription'];
        }
        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        return $model;
    }
}
