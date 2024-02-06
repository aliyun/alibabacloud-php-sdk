<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkAclEntryRequest extends Model
{
    /**
     * @description The source CIDR block.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The description of the network ACL.
     *
     * The description must be 1 to 256 characters in length and cannot start with http:// or https://.
     * @example This is my NetworkAcl.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether the ACL rule controls inbound or outbound access requests. Valid values:
     *
     *   **ingress**
     *   **egress**
     *
     * @example ingress
     *
     * @var string
     */
    public $direction;

    /**
     * @description The name of the rule.
     *
     * The name must be 1 to 128 characters in length and cannot start with http:// or https://.
     * @example acl-1
     *
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-bp1lhl0taikrbgnh****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The action that is performed on network traffic that matches the rule. Valid values:
     *
     *   **accept**: allows network traffic.
     *   **drop**: blocks network traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The port range.
     *
     *   If you set **Protocol** to **all** or **icmp**, set this parameter to -1/-1, which specifies all ports.
     *   If you set **Protocol** to **tcp** or **udp**, the port can be **1 to 65535**. You can set this parameter to **1/200** or **80/80**, which specifies ports 1 to 200 or port 80.
     *
     * @example -1/-1
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the rule. Valid values: **1 to 100**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The protocol. Valid values:
     *
     *   **icmp**: ICMP
     *   **tcp**: TCP
     *   **udp**: UDP
     *   **all**: all protocols
     *
     * @example all
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'cidrBlock'           => 'CidrBlock',
        'description'         => 'Description',
        'direction'           => 'Direction',
        'networkAclEntryName' => 'NetworkAclEntryName',
        'networkAclId'        => 'NetworkAclId',
        'policy'              => 'Policy',
        'portRange'           => 'PortRange',
        'priority'            => 'Priority',
        'protocol'            => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->networkAclEntryName) {
            $res['NetworkAclEntryName'] = $this->networkAclEntryName;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkAclEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['NetworkAclEntryName'])) {
            $model->networkAclEntryName = $map['NetworkAclEntryName'];
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
