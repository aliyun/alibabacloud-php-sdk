<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class functionComputeConfig extends Model
{
    /**
     * @var string
     */
    public $contentTypeCatagory;

    /**
     * @var string
     */
    public $contentTypeValue;

    /**
     * @var string
     */
    public $fcBaseUrl;

    /**
     * @var string
     */
    public $fcType;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $method;

    /**
     * @var bool
     */
    public $onlyBusinessPath;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $roleArn;

    /**
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
