<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute\egressAclEntries;

use AlibabaCloud\Tea\Model;

class egressAclEntry extends Model
{
    /**
     * @example This is EgressAclEntries.
     *
     * @var string
     */
    public $description;

    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrIp;

    /**
     * @example nae-a2d447uw4tillxdcv****
     *
     * @var string
     */
    public $networkAclEntryId;

    /**
     * @example acl-2
     *
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @example -1/-1
     *
     * @var string
     */
    public $port;

    /**
     * @example all
     *
     * @var string
     */
    public $protocol;
    protected $_name = [
        'description'         => 'Description',
        'destinationCidrIp'   => 'DestinationCidrIp',
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
