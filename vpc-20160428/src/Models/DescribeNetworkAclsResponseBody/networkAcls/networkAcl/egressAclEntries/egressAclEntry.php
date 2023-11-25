<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls\networkAcl\egressAclEntries;

use AlibabaCloud\Tea\Model;

class egressAclEntry extends Model
{
    /**
     * @description The description of the outbound rule.
     *
     * @example This is EgressAclEntries.
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrIp;

    /**
     * @var string
     */
    public $entryType;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @description The ID of the outbound rule.
     *
     * @example nae-a2d447uw4tillfvgb****
     *
     * @var string
     */
    public $networkAclEntryId;

    /**
     * @description The name of the outbound rule.
     *
     * @example acl-2
     *
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @description The action to be performed on network traffic that matches the rule. Valid values:
     *
     * - **accept**: allows network traffic.
     * - **drop**: blocks network traffic.
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The destination port range of the outbound traffic.
     *
     * - If **Protocol** of the outbound rule is set to **all**, **icmp**, or **gre**, the port range is **-1/-1**, which specifies all ports.
     * - If **Protocol** of the outbound rule is set to **tcp** or **udp**, the port range is in the following format: **1/200** or **80/80**. 1/200 indicates port 1 to port 200. 80/80 indicates port 80. Valid values for a port: **1** to **65535**.
     * @example -1/-1
     *
     * @var string
     */
    public $port;

    /**
     * @description The protocol. Valid values:
     *
     * - **icmp**: ICMP
     * - **gre**: GRE
     * - **tcp**: TCP
     * - **udp**: UDP
     * - **all**: all protocols
     * @example all
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'description'         => 'Description',
        'destinationCidrIp'   => 'DestinationCidrIp',
        'entryType'           => 'EntryType',
        'ipVersion'           => 'IpVersion',
        'networkAclEntryId'   => 'NetworkAclEntryId',
        'networkAclEntryName' => 'NetworkAclEntryName',
        'policy'              => 'Policy',
        'port'                => 'Port',
        'protocol'            => 'Protocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationCidrIp) {
            $res['DestinationCidrIp'] = $this->destinationCidrIp;
        }
        if (null !== $this->entryType) {
            $res['EntryType'] = $this->entryType;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return egressAclEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationCidrIp'])) {
            $model->destinationCidrIp = $map['DestinationCidrIp'];
        }
        if (isset($map['EntryType'])) {
            $model->entryType = $map['EntryType'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        return $model;
    }
}
