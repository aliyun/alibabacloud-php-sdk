<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataServiceApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiDescription;

    /**
     * @example 10000
     *
     * @var int
     */
    public $apiId;

    /**
     * @example /test/2
     *
     * @var string
     */
    public $apiPath;

    /**
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @example 0,1
     *
     * @var string
     */
    public $protocols;

    /**
     * @example {"failedResultSample":"fail","registrationErrorCodes":[{"errorCode":"e1","errorMessage":"msg1","errorSolution":"sol1"},{"errorCode":"e2","errorMessage":"msg2","errorSolution":"sol2"}],"registrationRequestParameters":[{"columnName":"","defaultValue":"","exampleValue":"","isRequiredParameter":true,"parameterDataType":0,"parameterDescription":"","parameterName":"id","parameterOperator":0,"parameterPosition":1},{"columnName":"","defaultValue":"xx","exampleValue":"","isRequiredParameter":true,"parameterDataType":0,"parameterDescription":"","parameterName":"cc","parameterOperator":2,"parameterPosition":2}],"serviceContentType":1,"serviceHost":"http://www.baidu.com","servicePath":"/[uid]","serviceRequestBodyDescription":"body","successfulResultSample":"success"}
     *
     * @var string
     */
    public $registrationDetails;

    /**
     * @example 0
     *
     * @var int
     */
    public $requestMethod;

    /**
     * @example 0
     *
     * @var int
     */
    public $responseContentType;

    /**
     * @example {"isPagedResponse":false,"script":"select id as id1, name as name1 from person where id=${inputid}","scriptConnection":{"connectionId":122786,"tableName":"person"},"scriptRequestParameters":[{"defaultValue":"","exampleValue":"","isRequiredParameter":true,"parameterDataType":0,"parameterDescription":"","parameterName":"inputid","parameterOperator":0,"parameterPosition":1}],"scriptResponseParameters":[{"exampleValue":"","parameterDataType":0,"parameterDescription":"","parameterName":"id1"},{"exampleValue":"","parameterDataType":0,"parameterDescription":"","parameterName":"name1"}]}
     *
     * @var string
     */
    public $scriptDetails;

    /**
     * @example 10001
     *
     * @var int
     */
    public $tenantId;

    /**
     * @example 10000
     *
     * @var int
     */
    public $timeout;

    /**
     * @example 0
     *
     * @var int
     */
    public $visibleRange;

    /**
     * @example {"isPagedResponse":true,"wizardConnection":{"connectionId":122786,"tableName":"person"},"wizardRequestParameters":[{"columnName":"id","defaultValue":"","exampleValue":"1","isRequiredParameter":true,"parameterDataType":2,"parameterDescription":"","parameterName":"id","parameterOperator":0,"parameterPosition":0}],"wizardResponseParameters":[{"columnName":"id","exampleValue":"11","parameterDataType":2,"parameterDescription":"","parameterName":"id"}]}
     *
     * @var string
     */
    public $wizardDetails;
    protected $_name = [
        'apiDescription'      => 'ApiDescription',
        'apiId'               => 'ApiId',
        'apiPath'             => 'ApiPath',
        'projectId'           => 'ProjectId',
        'protocols'           => 'Protocols',
        'registrationDetails' => 'RegistrationDetails',
        'requestMethod'       => 'RequestMethod',
        'responseContentType' => 'ResponseContentType',
        'scriptDetails'       => 'ScriptDetails',
        'tenantId'            => 'TenantId',
        'timeout'             => 'Timeout',
        'visibleRange'        => 'VisibleRange',
        'wizardDetails'       => 'WizardDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDescription) {
            $res['ApiDescription'] = $this->apiDescription;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
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
        if (null !== $this->requestMethod) {
            $res['RequestMethod'] = $this->requestMethod;
        }
        if (null !== $this->responseContentType) {
            $res['ResponseContentType'] = $this->responseContentType;
        }
        if (null !== $this->scriptDetails) {
            $res['ScriptDetails'] = $this->scriptDetails;
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

    /**
     * @param array $map
     *
     * @return UpdateDataServiceApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDescription'])) {
            $model->apiDescription = $map['ApiDescription'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
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
        if (isset($map['RequestMethod'])) {
            $model->requestMethod = $map['RequestMethod'];
        }
        if (isset($map['ResponseContentType'])) {
            $model->responseContentType = $map['ResponseContentType'];
        }
        if (isset($map['ScriptDetails'])) {
            $model->scriptDetails = $map['ScriptDetails'];
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
