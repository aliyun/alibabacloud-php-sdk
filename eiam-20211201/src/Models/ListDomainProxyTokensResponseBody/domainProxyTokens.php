<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListDomainProxyTokensResponseBody;

use AlibabaCloud\Tea\Model;

class domainProxyTokens extends Model
{
    /**
     * @description The time when the proxy token of the domain name was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The domain ID.
     *
     * @example dm_examplexxxx
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The proxy token of the domain.
     *
     * @example PTxxxxxxxx
     *
     * @var string
     */
    public $domainProxyToken;

    /**
     * @description The ID of the proxy token of the domain.
     *
     * @example pt_examplexxxx
     *
     * @var string
     */
    public $domainProxyTokenId;

    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the proxy token of the domain name was last used. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $lastUsedTime;

    /**
     * @description The state of the proxy token. Valid values:
     *
     *   enabled
     *   disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the proxy token of the domain name was last updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'domainId' => 'DomainId',
        'domainProxyToken' => 'DomainProxyToken',
        'domainProxyTokenId' => 'DomainProxyTokenId',
        'instanceId' => 'InstanceId',
        'lastUsedTime' => 'LastUsedTime',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

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
     * @return domainProxyTokens
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
