<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig;
use AlibabaCloud\Tea\Model;

class GetChainResponseBody extends Model
{
    /**
     * @var chainConfig
     */
    public $chainConfig;

    /**
     * @example chi-0ops0gsmw5x2****
     *
     * @var string
     */
    public $chainId;

    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example 1638255427000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @example cri-4cdrlqmhn4gm****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 1638259914000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example C87993B5-7D61-5CAC-8D64-1AC732DD69FF
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $scopeExclude;

    /**
     * @example crr-nyrh2oko32xb****
     *
     * @var string
     */
    public $scopeId;

    /**
     * @example REPOSITORY
     *
     * @var string
     */
    public $scopeType;
    protected $_name = [
        'chainConfig'  => 'ChainConfig',
        'chainId'      => 'ChainId',
        'code'         => 'Code',
        'createTime'   => 'CreateTime',
        'description'  => 'Description',
        'instanceId'   => 'InstanceId',
        'isSuccess'    => 'IsSuccess',
        'modifiedTime' => 'ModifiedTime',
        'name'         => 'Name',
        'requestId'    => 'RequestId',
        'scopeExclude' => 'ScopeExclude',
        'scopeId'      => 'ScopeId',
        'scopeType'    => 'ScopeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chainConfig) {
            $res['ChainConfig'] = null !== $this->chainConfig ? $this->chainConfig->toMap() : null;
        }
        if (null !== $this->chainId) {
            $res['ChainId'] = $this->chainId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scopeExclude) {
            $res['ScopeExclude'] = $this->scopeExclude;
        }
        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }
        if (null !== $this->scopeType) {
            $res['ScopeType'] = $this->scopeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChainConfig'])) {
            $model->chainConfig = chainConfig::fromMap($map['ChainConfig']);
        }
        if (isset($map['ChainId'])) {
            $model->chainId = $map['ChainId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScopeExclude'])) {
            if (!empty($map['ScopeExclude'])) {
                $model->scopeExclude = $map['ScopeExclude'];
            }
        }
        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }
        if (isset($map['ScopeType'])) {
            $model->scopeType = $map['ScopeType'];
        }

        return $model;
    }
}
