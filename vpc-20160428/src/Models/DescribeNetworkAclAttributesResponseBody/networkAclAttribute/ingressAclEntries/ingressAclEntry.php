<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNetworkAclAttributesResponseBody\networkAclAttribute\ingressAclEntries;

use AlibabaCloud\Tea\Model;

class ingressAclEntry extends Model
{
    /**
     * @var string
     */
    public $networkAclEntryId;

    /**
     * @var string
     */
    public $entryType;

    /**
     * @var string
     */
    public $networkAclEntryName;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'networkAclEntryId'   => 'NetworkAclEntryId',
        'entryType'           => 'EntryType',
        'networkAclEntryName' => 'NetworkAclEntryName',
        'policy'              => 'Policy',
        'description'         => 'Description',
        'sourceCidrIp'        => 'SourceCidrIp',
        'protocol'            => 'Protocol',
        'port'                => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclEntryId) {
            $res['NetworkAclEntryId'] = $this->networkAclEntryId;
        }
        if (null !== $this->entryType) {
            $res['EntryType'] = $this->entryType;
        }
        if (null !== $this->networkAclEntryName) {
            $res['NetworkAclEntryName'] = $this->networkAclEntryName;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['NetworkAclEntryId'])) {
            $model->networkAclEntryId = $map['NetworkAclEntryId'];
        }
        if (isset($map['EntryType'])) {
            $model->entryType = $map['EntryType'];
        }
        if (isset($map['NetworkAclEntryName'])) {
            $model->networkAclEntryName = $map['NetworkAclEntryName'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
