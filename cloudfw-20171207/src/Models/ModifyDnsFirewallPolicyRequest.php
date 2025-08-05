<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyDnsFirewallPolicyRequest extends Model
{
    /**
     * @example log
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description This parameter is required.
     *
     * @example 00281255-d220-4db1-8f4f-c4df22****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example db_group
     *
     * @var string
     */
    public $destination;

    /**
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @var string
     */
    public $source;

    /**
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example net
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'aclAction' => 'AclAction',
        'aclUuid' => 'AclUuid',
        'description' => 'Description',
        'destination' => 'Destination',
        'destinationType' => 'DestinationType',
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
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
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
     * @return ModifyDnsFirewallPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
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
