<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainDomainProxyTokenResponseBody;

use AlibabaCloud\Tea\Model;

class domainProxyToken extends Model
{
    /**
     * @description 域名代理Token创建时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 域名ID。
     *
     * @example dm_examplexxxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description 域名代理Token。
     *
     * @example PTxxxxxxxx
     *
     * @var string
     */
    public $domainProxyToken;

    /**
     * @description 域名代理Token ID。
     *
     * @example pt_examplexxxx
     *
     * @var string
     */
    public $domainProxyTokenId;

    /**
     * @description 实例ID。
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 域名代理Token最近使用时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $lastUsedTime;

    /**
     * @description token状态，枚举类型：(enabled）启用,（disabled）禁用。
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description 域名代理Token最近更新时间，Unix时间戳格式，单位为毫秒。
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'domainId'           => 'DomainId',
        'domainProxyToken'   => 'DomainProxyToken',
        'domainProxyTokenId' => 'DomainProxyTokenId',
        'instanceId'         => 'InstanceId',
        'lastUsedTime'       => 'LastUsedTime',
        'status'             => 'Status',
        'updateTime'         => 'UpdateTime',
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
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainProxyToken) {
            $res['DomainProxyToken'] = $this->domainProxyToken;
        }
        if (null !== $this->domainProxyTokenId) {
            $res['DomainProxyTokenId'] = $this->domainProxyTokenId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lastUsedTime) {
            $res['LastUsedTime'] = $this->lastUsedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainProxyToken
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainProxyToken'])) {
            $model->domainProxyToken = $map['DomainProxyToken'];
        }
        if (isset($map['DomainProxyTokenId'])) {
            $model->domainProxyTokenId = $map['DomainProxyTokenId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LastUsedTime'])) {
            $model->lastUsedTime = $map['LastUsedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
