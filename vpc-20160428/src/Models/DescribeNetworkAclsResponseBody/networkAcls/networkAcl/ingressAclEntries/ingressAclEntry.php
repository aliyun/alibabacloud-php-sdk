<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclsResponseBody\networkAcls\networkAcl\ingressAclEntries;

use AlibabaCloud\Tea\Model;

class ingressAclEntry extends Model
{
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
     * @example nae-a2dk86arlydmezasw****
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
     * @description The action to be performed on network traffic that matches the rule. Valid values:
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
     * @description The destination port range of the inbound traffic.
     *
     *   If **Protocol** of the inbound rule is set to **all**, **icmp**, or **gre**, the port range is **-1/-1**, which indicates all ports.
     *   If **Protocol** of the inbound rule is set to **tcp** or **udp**, the port range is in the following format: **1/200** or **80/80**. 1/200 indicates port 1 to port 200. 80/80 indicates port 80. Valid values for a port: **1** to **65535**.
     *
     * @example -1/-1
     *
     * @var string
     */
    public $port;

    /**
     * @description The protocol. Valid values:
     *
     *   **icmp**: ICMP
     *   **gre**: GRE
     *   **tcp**: TCP
     *   **udp**: UDP
     *   **all**: all protocols
     *
     * @example all
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The source CIDR block.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'description'         => 'Description',
        'networkAclEntryId'   => 'NetworkAclEntryId',
        'networkAclEntryName' => 'NetworkAclEntryName',
        'policy'              => 'Policy',
        'port'                => 'Port',
        'protocol'            => 'Protocol',
        'sourceCidrIp'        => 'SourceCidrIp',
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
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressAclEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}
