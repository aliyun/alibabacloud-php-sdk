<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class functionComputeConfig extends Model
{
    /**
     * @var string
     */
    public $fcType;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $fcBaseUrl;

    /**
     * @var string
     */
    public $contentTypeValue;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $onlyBusinessPath;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $qualifier;
    protected $_name = [
        'fcType'              => 'FcType',
        'roleArn'             => 'RoleArn',
        'method'              => 'Method',
        'fcBaseUrl'           => 'FcBaseUrl',
        'contentTypeValue'    => 'ContentTypeValue',
        'regionId'            => 'RegionId',
        'onlyBusinessPath'    => 'OnlyBusinessPath',
        'functionName'        => 'FunctionName',
        'contentTypeCatagory' => 'ContentTypeCatagory',
        'path'                => 'Path',
        'serviceName'         => 'ServiceName',
        'qualifier'           => 'Qualifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fcType) {
            $res['FcType'] = $this->fcType;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->fcBaseUrl) {
            $res['FcBaseUrl'] = $this->fcBaseUrl;
        }
        if (null !== $this->contentTypeValue) {
            $res['ContentTypeValue'] = $this->contentTypeValue;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->onlyBusinessPath) {
            $res['OnlyBusinessPath'] = $this->onlyBusinessPath;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->contentTypeCatagory) {
            $res['ContentTypeCatagory'] = $this->contentTypeCatagory;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->qualifier) {
            $res['Qualifier'] = $this->qualifier;
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
        if (isset($map['FcType'])) {
            $model->fcType = $map['FcType'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['FcBaseUrl'])) {
            $model->fcBaseUrl = $map['FcBaseUrl'];
        }
        if (isset($map['ContentTypeValue'])) {
            $model->contentTypeValue = $map['ContentTypeValue'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OnlyBusinessPath'])) {
            $model->onlyBusinessPath = $map['OnlyBusinessPath'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['ContentTypeCatagory'])) {
            $model->contentTypeCatagory = $map['ContentTypeCatagory'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Qualifier'])) {
            $model->qualifier = $map['Qualifier'];
        }

        return $model;
    }
}
