<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainsResponseBody;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainsResponseBody\domains\filing;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @description The time when the domain name was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Indicates whether the domain name is the default domain.
     *
     * @example false
     *
     * @var bool
     */
    public $defaultDomain;

    /**
     * @description The domain.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The domain ID.
     *
     * @example dm_examplexxxxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   system_init: an initial domain name.
     *   user_custom: a custom domain name.
     *
     * @example system_init
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The information about the Internet content provider (ICP) filing of the domain name.
     *
     * @var filing
     */
    public $filing;

    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the domain name is locked. Valid values:
     *
     *   unlock
     *   lockByLicense
     *
     * @example unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The time when the domain name was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultDomain' => 'DefaultDomain',
        'domain' => 'Domain',
        'domainId' => 'DomainId',
        'domainType' => 'DomainType',
        'filing' => 'Filing',
        'instanceId' => 'InstanceId',
        'lockMode' => 'LockMode',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

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
     * @return domains
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
