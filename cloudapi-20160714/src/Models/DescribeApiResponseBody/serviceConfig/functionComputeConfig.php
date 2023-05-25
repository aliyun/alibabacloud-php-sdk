<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class functionComputeConfig extends Model
{
    /**
     * @description The name of the backend service.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @description The value of the parameter.
     *
     * @example application/x-www-form-urlencoded; charset=UTF-8
     *
     * @var string
     */
    public $contentTypeValue;

    /**
     * @description The result returned for service mocking.
     *
     * @example https://1227****64334133.ap-southeast-1-int***al.fc.aliyuncs.com/201****-15/proxy/test****ice.LATEST/testHttp/
     *
     * @var string
     */
    public $fcBaseUrl;

    /**
     * @description The parameters of API requests sent by API Gateway to the backend service.
     *
     * @example HttpTrigger
     *
     * @var string
     */
    public $fcType;

    /**
     * @description Specifies whether to carry the header : X-Ca-Nonce when calling an API. This is the unique identifier of the request and is generally identified by UUID. After receiving this parameter, API Gateway verifies the validity of this parameter. The same value can be used only once within 15 minutes. This helps prevent reply attacks. Valid values:
     *
     *   **true**: This field is forcibly checked when an API is requested to prevent replay attacks.
     *   **false**: This field is not checked.
     *
     * @example edge_function
     *
     * @var string
     */
    public $functionName;

    /**
     * @description Specifies whether to enable the Mock mode. Valid values:
     *
     *   **TRUE**: The Mock mode is enabled.
     *   **FALSE**: The Mock mode is not enabled.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description The type of the array element.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyBusinessPath;

    /**
     * @description The application name in AONE.
     *
     * @example /api/offline/cacheData
     *
     * @var string
     */
    public $path;

    /**
     * @description The maximum parameter length when **ParameterType** is set to String.
     *
     * @example 2
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The parameters of API requests sent by the consumer to API Gateway.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description.
     *
     * @example acs:ram::111***:role/aliyunserviceroleforsas
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The event source.
     *
     * @example fcservicename
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'contentTypeCatagory' => 'ContentTypeCatagory',
        'contentTypeValue'    => 'ContentTypeValue',
        'fcBaseUrl'           => 'FcBaseUrl',
        'fcType'              => 'FcType',
        'functionName'        => 'FunctionName',
        'method'              => 'Method',
        'onlyBusinessPath'    => 'OnlyBusinessPath',
        'path'                => 'Path',
        'qualifier'           => 'Qualifier',
        'regionId'            => 'RegionId',
        'roleArn'             => 'RoleArn',
        'serviceName'         => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentTypeCatagory) {
            $res['ContentTypeCatagory'] = $this->contentTypeCatagory;
        }
        if (null !== $this->contentTypeValue) {
            $res['ContentTypeValue'] = $this->contentTypeValue;
        }
        if (null !== $this->fcBaseUrl) {
            $res['FcBaseUrl'] = $this->fcBaseUrl;
        }
        if (null !== $this->fcType) {
            $res['FcType'] = $this->fcType;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->onlyBusinessPath) {
            $res['OnlyBusinessPath'] = $this->onlyBusinessPath;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->qualifier) {
            $res['Qualifier'] = $this->qualifier;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionComputeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentTypeCatagory'])) {
            $model->contentTypeCatagory = $map['ContentTypeCatagory'];
        }
        if (isset($map['ContentTypeValue'])) {
            $model->contentTypeValue = $map['ContentTypeValue'];
        }
        if (isset($map['FcBaseUrl'])) {
            $model->fcBaseUrl = $map['FcBaseUrl'];
        }
        if (isset($map['FcType'])) {
            $model->fcType = $map['FcType'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['OnlyBusinessPath'])) {
            $model->onlyBusinessPath = $map['OnlyBusinessPath'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Qualifier'])) {
            $model->qualifier = $map['Qualifier'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
