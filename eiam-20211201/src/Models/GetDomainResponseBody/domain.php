<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainResponseBody\domain\filing;

class domain extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var bool
     */
    public $defaultDomain;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $domainId;
    /**
     * @var string
     */
    public $domainType;
    /**
     * @var filing
     */
    public $filing;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $lockMode;
    /**
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
        if (null !== $this->filing) {
            $this->filing->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Filing'] = null !== $this->filing ? $this->filing->toArray($noStream) : $this->filing;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
