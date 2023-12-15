<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Tea\Model;

class functionComputeConfig extends Model
{
    /**
     * @description The root path of the Function Compute service.
     *
     * @example https://t*******.ap-*****.fcapp.run/
     *
     * @var string
     */
    public $fcBaseUrl;

    /**
     * @description The region ID of the Function Compute service.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $fcRegionId;

    /**
     * @description The type of the service in Function Compute.
     *
     * @example HttpTrigger
     *
     * @var string
     */
    public $fcType;

    /**
     * @description The function name that is defined in Function Compute.
     *
     * @example edge_function
     *
     * @var string
     */
    public $functionName;

    /**
     * @description Indicates whether the backend service receives only the service path.
     *
     * @example false
     *
     * @var bool
     */
    public $onlyBusinessPath;

    /**
     * @description The alias of the function.
     *
     * @example testQualifier
     *
     * @var string
     */
    public $qualifier;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role that is assumed by API Gateway to access Function Compute.
     *
     * @example acs:ram::31985*:role/aliyunserviceroleforbastionhostpam
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The service name that is defined in Function Compute.
     *
     * @example myservice
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'fcBaseUrl'        => 'FcBaseUrl',
        'fcRegionId'       => 'FcRegionId',
        'fcType'           => 'FcType',
        'functionName'     => 'FunctionName',
        'onlyBusinessPath' => 'OnlyBusinessPath',
        'qualifier'        => 'Qualifier',
        'roleArn'          => 'RoleArn',
        'serviceName'      => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fcBaseUrl) {
            $res['FcBaseUrl'] = $this->fcBaseUrl;
        }
        if (null !== $this->fcRegionId) {
            $res['FcRegionId'] = $this->fcRegionId;
        }
        if (null !== $this->fcType) {
            $res['FcType'] = $this->fcType;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->onlyBusinessPath) {
            $res['OnlyBusinessPath'] = $this->onlyBusinessPath;
        }
        if (null !== $this->qualifier) {
            $res['Qualifier'] = $this->qualifier;
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
        if (isset($map['FcBaseUrl'])) {
            $model->fcBaseUrl = $map['FcBaseUrl'];
        }
        if (isset($map['FcRegionId'])) {
            $model->fcRegionId = $map['FcRegionId'];
        }
        if (isset($map['FcType'])) {
            $model->fcType = $map['FcType'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['OnlyBusinessPath'])) {
            $model->onlyBusinessPath = $map['OnlyBusinessPath'];
        }
        if (isset($map['Qualifier'])) {
            $model->qualifier = $map['Qualifier'];
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
