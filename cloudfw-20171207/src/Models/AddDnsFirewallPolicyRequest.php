<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class AddDnsFirewallPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example log
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example db_group
     *
     * @var string
     */
    public $destination;

    /**
     * @description This parameter is required.
     *
     * @example domain
     *
     * @var string
     */
    public $destinationType;

    /**
     * @example out
     *
     * @var string
     */
    public $direction;

    /**
     * @description This parameter is required.
     *
     * @example 4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description This parameter is required.
     *
     * @example 192.168.0.223/32
     *
     * @var string
     */
    public $source;

    /**
     * @example 140.205.118.97
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description This parameter is required.
     *
     * @example net
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'aclAction' => 'AclAction',
        'description' => 'Description',
        'destination' => 'Destination',
        'destinationType' => 'DestinationType',
        'direction' => 'Direction',
        'ipVersion' => 'IpVersion',
        'lang' => 'Lang',
        'priority' => 'Priority',
        'release' => 'Release',
        'source' => 'Source',
        'sourceIp' => 'SourceIp',
        'sourceType' => 'SourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDnsFirewallPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
