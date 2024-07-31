<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class CreateFirewallRuleRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the simple application server.
     *
     * This parameter is required.
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The port range.
     *
     *   When the transport layer protocol is TCP and/or UDP, the port range is 1 to 65535. Specify a port range in the format of \\<start port number>/\\<end port number>. Example: 1024/1055, which specifies the port range from 1024 to 1055.
     *   When the transport layer protocol is ICMP, the port range is -1/-1, which indicates all ports.
     *
     * This parameter is required.
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description The region ID of the simple application server.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remarks of the firewall rule.
     *
     * @example TEST
     *
     * @var string
     */
    public $remark;

    /**
     * @description The transport layer protocol. Valid values:
     *
     *   TCP
     *   UDP
     *   TCP+UDP
     *   ICMP
     *
     * This parameter is required.
     * @example TCP
     *
     * @var string
     */
    public $ruleProtocol;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'instanceId'   => 'InstanceId',
        'port'         => 'Port',
        'regionId'     => 'RegionId',
        'remark'       => 'Remark',
        'ruleProtocol' => 'RuleProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleProtocol) {
            $res['RuleProtocol'] = $this->ruleProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFirewallRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleProtocol'])) {
            $model->ruleProtocol = $map['RuleProtocol'];
        }

        return $model;
    }
}
