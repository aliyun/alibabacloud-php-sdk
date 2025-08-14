<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDnsFirewallPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class policys extends Model
{
    /**
     * @var string
     */
    public $aclAction;

    /**
     * @var string
     */
    public $aclUuid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string[]
     */
    public $destinationAddrs;

    /**
     * @var string
     */
    public $destinationGroupType;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $hitLastTime;

    /**
     * @var int
     */
    public $hitTimes;

    /**
     * @var int
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $release;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string[]
     */
    public $sourceAddrs;

    /**
     * @var string
     */
    public $sourceGroupType;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'aclAction' => 'AclAction',
        'aclUuid' => 'AclUuid',
        'description' => 'Description',
        'destination' => 'Destination',
        'destinationAddrs' => 'DestinationAddrs',
        'destinationGroupType' => 'DestinationGroupType',
        'destinationType' => 'DestinationType',
        'direction' => 'Direction',
        'hitLastTime' => 'HitLastTime',
        'hitTimes' => 'HitTimes',
        'ipVersion' => 'IpVersion',
        'priority' => 'Priority',
        'release' => 'Release',
        'source' => 'Source',
        'sourceAddrs' => 'SourceAddrs',
        'sourceGroupType' => 'SourceGroupType',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->destinationAddrs)) {
            Model::validateArray($this->destinationAddrs);
        }
        if (\is_array($this->sourceAddrs)) {
            Model::validateArray($this->sourceAddrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->destinationAddrs) {
            if (\is_array($this->destinationAddrs)) {
                $res['DestinationAddrs'] = [];
                $n1 = 0;
                foreach ($this->destinationAddrs as $item1) {
                    $res['DestinationAddrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationGroupType) {
            $res['DestinationGroupType'] = $this->destinationGroupType;
        }

        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->hitLastTime) {
            $res['HitLastTime'] = $this->hitLastTime;
        }

        if (null !== $this->hitTimes) {
            $res['HitTimes'] = $this->hitTimes;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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

        if (null !== $this->sourceAddrs) {
            if (\is_array($this->sourceAddrs)) {
                $res['SourceAddrs'] = [];
                $n1 = 0;
                foreach ($this->sourceAddrs as $item1) {
                    $res['SourceAddrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceGroupType) {
            $res['SourceGroupType'] = $this->sourceGroupType;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DestinationAddrs'])) {
            if (!empty($map['DestinationAddrs'])) {
                $model->destinationAddrs = [];
                $n1 = 0;
                foreach ($map['DestinationAddrs'] as $item1) {
                    $model->destinationAddrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationGroupType'])) {
            $model->destinationGroupType = $map['DestinationGroupType'];
        }

        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['HitLastTime'])) {
            $model->hitLastTime = $map['HitLastTime'];
        }

        if (isset($map['HitTimes'])) {
            $model->hitTimes = $map['HitTimes'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
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

        if (isset($map['SourceAddrs'])) {
            if (!empty($map['SourceAddrs'])) {
                $model->sourceAddrs = [];
                $n1 = 0;
                foreach ($map['SourceAddrs'] as $item1) {
                    $model->sourceAddrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceGroupType'])) {
            $model->sourceGroupType = $map['SourceGroupType'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
