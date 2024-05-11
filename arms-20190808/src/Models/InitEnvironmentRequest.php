<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class InitEnvironmentRequest extends Model
{
    /**
     * @description The language. Valid values: zh and en. Default value: zh.
     *
     * @example zh
     *
     * @var string
     */
    public $aliyunLang;

    /**
     * @description Whether to create a Token in order to enhance the security of data retrieval.
     *
     * @example false
     *
     * @var bool
     */
    public $createAuthToken;

    /**
     * @description The ID of the environment instance.
     *
     * This parameter is required.
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Whether agents or exporters are managed. Valid values:
     *
     *   none: No. By default, no managed agents or exporters are provided for ACK clusters.
     *   agent: Agents are managed. By default, managed agents are provided for ASK clusters, ACS clusters, and ACK One clusters.
     *   agent-exproter: Agents and exporters are managed. By default, managed agents and exporters are provided for cloud services.
     *
     * @example agent
     *
     * @var string
     */
    public $managedType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'aliyunLang'      => 'AliyunLang',
        'createAuthToken' => 'CreateAuthToken',
        'environmentId'   => 'EnvironmentId',
        'managedType'     => 'ManagedType',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }
        if (null !== $this->createAuthToken) {
            $res['CreateAuthToken'] = $this->createAuthToken;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->managedType) {
            $res['ManagedType'] = $this->managedType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }
        if (isset($map['CreateAuthToken'])) {
            $model->createAuthToken = $map['CreateAuthToken'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['ManagedType'])) {
            $model->managedType = $map['ManagedType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
