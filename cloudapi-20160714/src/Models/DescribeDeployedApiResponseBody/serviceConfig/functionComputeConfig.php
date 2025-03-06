<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class functionComputeConfig extends Model
{
    /**
     * @description The ContentType header type used when you call the backend service over HTTP.
     *
     *   **DEFAULT: the default header type in API Gateway.**
     *   **CUSTOM: a custom header type.**
     *   **CLIENT: the ContentType header type of the client.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @description The value of the ContentType header when the ServiceProtocol parameter is set to HTTP and the ContentTypeCatagory parameter is set to DEFAULT or CUSTOM.
     *
     * @example application/x-www-form-urlencoded; charset=UTF-8
     *
     * @var string
     */
    public $contentTypeValue;

    /**
     * @description The root path of Function Compute.
     *
     * @example https://122xxxxxxx.fc.aliyun.com/2016xxxx/proxy/testSxxx.xxx/testHttp/
     *
     * @var string
     */
    public $fcBaseUrl;

    /**
     * @description The type of the Function Compute instance.
     *
     * @example HttpTrigger
     *
     * @var string
     */
    public $fcType;

    /**
     * @description The function name defined in Function Compute.
     *
     * @example domain_business_control
     *
     * @var string
     */
    public $functionName;

    /**
     * @description The request method.
     *
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @description The backend only receives the service path.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyBusinessPath;

    /**
     * @description The API request path.
     *
     * @example /api/offline/cacheData
     *
     * @var string
     */
    public $path;

    /**
     * @description The alias of the function.
     *
     * @example 2
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The region where the API is located.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role to be assumed by API Gateway to access Function Compute.
     *
     * @example acs:ram::111***:role/aliyunserviceroleforsas
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The service name defined in Function Compute.
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
