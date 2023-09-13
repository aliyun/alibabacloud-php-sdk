<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainResponseBody\domain\filing;
use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @description 域名创建时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 是否默认域名。true表示实例默认域名，false表示非默认域名
     *
     * @example false
     *
     * @var bool
     */
    public $defaultDomain;

    /**
     * @description 域名。
     *
     * @example login.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description 域名ID。
     *
     * @example dm_examplexxxxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description 域名类型。枚举取值:system_init(系统初始化)、user_custom(用户自定义)。
     *
     * @example system_init
     *
     * @var string
     */
    public $domainType;

    /**
     * @description 域名备案信息。
     *
     * @var filing
     */
    public $filing;

    /**
     * @description 实例ID。
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 域名锁定状态。枚举取值:unlock(正常)、lockByLicense(因License限制不可用)。
     *
     * @example unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description 域名最近更新时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'defaultDomain' => 'DefaultDomain',
        'domain'        => 'Domain',
        'domainId'      => 'DomainId',
        'domainType'    => 'DomainType',
        'filing'        => 'Filing',
        'instanceId'    => 'InstanceId',
        'lockMode'      => 'LockMode',
        'updateTime'    => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->filing) {
            $res['Filing'] = null !== $this->filing ? $this->filing->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['Filing'])) {
            $model->filing = filing::fromMap($map['Filing']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
