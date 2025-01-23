<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\registrationDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\scriptDetails;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApisResponseBody\data\apis\wizardDetails;

class apis extends Model
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
     * @var int
     */
    public $folderId;
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
     * @var int[]
     */
    public $protocols;
    /**
     * @var registrationDetails
     */
    public $registrationDetails;
    /**
     * @var int
     */
    public $requestMethod;
    /**
     * @var int
     */
    public $responseContentType;
    /**
     * @var scriptDetails
     */
    public $scriptDetails;
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
     * @var wizardDetails
     */
    public $wizardDetails;
    protected $_name = [
        'apiId'               => 'ApiId',
        'apiMode'             => 'ApiMode',
        'apiName'             => 'ApiName',
        'apiPath'             => 'ApiPath',
        'createdTime'         => 'CreatedTime',
        'creatorId'           => 'CreatorId',
        'description'         => 'Description',
        'folderId'            => 'FolderId',
        'groupId'             => 'GroupId',
        'modifiedTime'        => 'ModifiedTime',
        'operatorId'          => 'OperatorId',
        'projectId'           => 'ProjectId',
        'protocols'           => 'Protocols',
        'registrationDetails' => 'RegistrationDetails',
        'requestMethod'       => 'RequestMethod',
        'responseContentType' => 'ResponseContentType',
        'scriptDetails'       => 'ScriptDetails',
        'status'              => 'Status',
        'tenantId'            => 'TenantId',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'wizardDetails'       => 'WizardDetails',
    ];

    public function validate()
    {
        if (\is_array($this->protocols)) {
            Model::validateArray($this->protocols);
        }
        if (null !== $this->registrationDetails) {
            $this->registrationDetails->validate();
        }
        if (null !== $this->scriptDetails) {
            $this->scriptDetails->validate();
        }
        if (null !== $this->wizardDetails) {
            $this->wizardDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
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

        if (null !== $this->protocols) {
            if (\is_array($this->protocols)) {
                $res['Protocols'] = [];
                $n1               = 0;
                foreach ($this->protocols as $item1) {
                    $res['Protocols'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->registrationDetails) {
            $res['RegistrationDetails'] = null !== $this->registrationDetails ? $this->registrationDetails->toArray($noStream) : $this->registrationDetails;
        }

        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }

        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }

        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = null !== $this->scriptDetails ? $this->scriptDetails->toArray($noStream) : $this->scriptDetails;
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

        if (null !== $this->wizardDetails) {
            $res['WizardDetails'] = null !== $this->wizardDetails ? $this->wizardDetails->toArray($noStream) : $this->wizardDetails;
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

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
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

        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = [];
                $n1               = 0;
                foreach ($map['Protocols'] as $item1) {
                    $model->protocols[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegistrationDetails'])) {
            $model->registrationDetails = registrationDetails::fromMap($map['RegistrationDetails']);
        }

        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }

        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }

        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = scriptDetails::fromMap($map['ScriptDetails']);
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

        if (isset($map['WizardDetails'])) {
            $model->wizardDetails = wizardDetails::fromMap($map['WizardDetails']);
        }

        return $model;
    }
}
