<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\EtlJob;

use AlibabaCloud\Tea\Model;

class functionConfig extends Model
{
    /**
     * @description 账户 id
     *
     * @var string
     */
    public $accountId;

    /**
     * @description endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description 函数名
     *
     * @var string
     */
    public $functionName;

    /**
     * @description 函数 provider
     *
     * @var string
     */
    public $functionProvider;

    /**
     * @description 地域
     *
     * @var string
     */
    public $regionName;

    /**
     * @description 角色授权
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description 服务名
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'accountId'        => 'accountId',
        'endpoint'         => 'endpoint',
        'functionName'     => 'functionName',
        'functionProvider' => 'functionProvider',
        'regionName'       => 'regionName',
        'roleArn'          => 'roleArn',
        'serviceName'      => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->functionProvider) {
            $res['functionProvider'] = $this->functionProvider;
        }
        if (null !== $this->regionName) {
            $res['regionName'] = $this->regionName;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['functionProvider'])) {
            $model->functionProvider = $map['functionProvider'];
        }
        if (isset($map['regionName'])) {
            $model->regionName = $map['regionName'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
