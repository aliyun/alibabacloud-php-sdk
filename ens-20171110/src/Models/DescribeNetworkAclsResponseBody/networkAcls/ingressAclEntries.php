<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkAclsResponseBody\networkAcls;

use AlibabaCloud\Tea\Model;

class ingressAclEntries extends Model
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
     * @description The description of the inbound rule.
     *
     * @example This is IngressAclEntries.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the inbound rule.
     *
     * @example nae-5dk86arlydmezasw****
     *
     * @var string
     */
    public $networkAclEntryId;

    /**
     * @description The name of the inbound rule.
     *
     * @example acl-3
     *
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @description The action that is performed on network traffic that matches the rule. Valid values:
     *
     *   **accept**: allows the network traffic.
     *   **drop**: blocks the network traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The destination port range of the inbound rule.
     *
     *   If **Protocol** in the inbound rule is set to **all** or **icmp**, \*\*-1/-1\*\* is returned for this parameter. \*\*-1/-1\*\* indicates all ports.
     *   If **Protocol** in the inbound rule is set to **tcp** or **udp**, the port range is in the following format: **1/200** or **80/80**. 1/200 indicates port 1 to port 200 and 80/80 indicates port 80. Valid values for a port: **1 to 65535**.
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
     *   **icmp**
     *   **tcp**
     *   **udp**
     *   **all**
     *
     * @example all
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **system**: The rule is created by the system.
     *   **custom**: The rule is created by a user.
     *
     * @example system
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cidrBlock'           => 'CidrBlock',
        'description'         => 'Description',
        'networkAclEntryId'   => 'NetworkAclEntryId',
        'networkAclEntryName' => 'NetworkAclEntryName',
        'policy'              => 'Policy',
        'portRange'           => 'PortRange',
        'priority'            => 'Priority',
        'protocol'            => 'Protocol',
        'type'                => 'Type',
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
        if (null !== $this->networkAclEntryId) {
            $res['NetworkAclEntryId'] = $this->networkAclEntryId;
        }
        if (null !== $this->networkAclEntryName) {
            $res['NetworkAclEntryName'] = $this->networkAclEntryName;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressAclEntries
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
        if (isset($map['NetworkAclEntryId'])) {
            $model->networkAclEntryId = $map['NetworkAclEntryId'];
        }
        if (isset($map['NetworkAclEntryName'])) {
            $model->networkAclEntryName = $map['NetworkAclEntryName'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
