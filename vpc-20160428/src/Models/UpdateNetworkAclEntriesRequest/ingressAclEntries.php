<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest;

use AlibabaCloud\Tea\Model;

class ingressAclEntries extends Model
{
    /**
     * @description The description of the inbound rule.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example This is IngressAclEntries.
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the rule. Set the value to **custom**, which specifies custom rules.
     *
     * @example custom
     *
     * @var string
     */
    public $entryType;

    /**
     * @description The IP version. Valid values:
     *
     *   **IPv4** (default)
     *   **IPv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The ID of the inbound rule.
     *
     * Valid values of **N**: **0** to **99**. You can specify at most 100 inbound rules.
     * @example nae-2zepn32de59j8m4****
     *
     * @var string
     */
    public $networkAclEntryId;

    /**
     * @description The name of the inbound rule.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example acl-3
     *
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @description The action to be performed on network traffic that matches the rule. Valid values:
     *
     *   **accept**
     *   **drop**
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The source port range of the inbound rule.
     *
     *   If the **protocol** of the inbound rule is set to **all**, **icmp**, or **gre**, the port range is -1/-1, which specifies all ports.
     *   If the **protocol** of the inbound rule is set to **tcp** or **udp**, set the port range in the following format: **1/200** or **80/80**, which specifies port 1 to port 200 or port 80. Valid ports: **1** to **65535**.
     *
     * @example -1/-1
     *
     * @var string
     */
    public $port;

    /**
     * @description The protocol. Valid values:
     *
     *   **icmp**
     *   **gre**
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
     * @description The source CIDR block.
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $sourceCidrIp;
    protected $_name = [
        'description'         => 'Description',
        'entryType'           => 'EntryType',
        'ipVersion'           => 'IpVersion',
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
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }

        return $model;
    }
}
