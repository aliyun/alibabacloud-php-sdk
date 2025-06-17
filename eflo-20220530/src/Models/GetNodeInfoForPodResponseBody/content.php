<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetNodeInfoForPodResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $hdeniIpv6SipQuota;

    /**
     * @var int
     */
    public $hdeniQuota;

    /**
     * @var int
     */
    public $hdeniSipQuota;

    /**
     * @var int
     */
    public $leniIpv6SipQuota;

    /**
     * @var int
     */
    public $leniQuota;

    /**
     * @var int
     */
    public $leniSipQuota;

    /**
     * @var int
     */
    public $lniSipQuota;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'hdeniIpv6SipQuota' => 'HdeniIpv6SipQuota',
        'hdeniQuota' => 'HdeniQuota',
        'hdeniSipQuota' => 'HdeniSipQuota',
        'leniIpv6SipQuota' => 'LeniIpv6SipQuota',
        'leniQuota' => 'LeniQuota',
        'leniSipQuota' => 'LeniSipQuota',
        'lniSipQuota' => 'LniSipQuota',
        'nodeId' => 'NodeId',
        'regionId' => 'RegionId',
        'vSwitches' => 'VSwitches',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitches)) {
            Model::validateArray($this->vSwitches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->hdeniIpv6SipQuota) {
            $res['HdeniIpv6SipQuota'] = $this->hdeniIpv6SipQuota;
        }

        if (null !== $this->hdeniQuota) {
            $res['HdeniQuota'] = $this->hdeniQuota;
        }

        if (null !== $this->hdeniSipQuota) {
            $res['HdeniSipQuota'] = $this->hdeniSipQuota;
        }

        if (null !== $this->leniIpv6SipQuota) {
            $res['LeniIpv6SipQuota'] = $this->leniIpv6SipQuota;
        }

        if (null !== $this->leniQuota) {
            $res['LeniQuota'] = $this->leniQuota;
        }

        if (null !== $this->leniSipQuota) {
            $res['LeniSipQuota'] = $this->leniSipQuota;
        }

        if (null !== $this->lniSipQuota) {
            $res['LniSipQuota'] = $this->lniSipQuota;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vSwitches) {
            if (\is_array($this->vSwitches)) {
                $res['VSwitches'] = [];
                $n1 = 0;
                foreach ($this->vSwitches as $item1) {
                    $res['VSwitches'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['HdeniIpv6SipQuota'])) {
            $model->hdeniIpv6SipQuota = $map['HdeniIpv6SipQuota'];
        }

        if (isset($map['HdeniQuota'])) {
            $model->hdeniQuota = $map['HdeniQuota'];
        }

        if (isset($map['HdeniSipQuota'])) {
            $model->hdeniSipQuota = $map['HdeniSipQuota'];
        }

        if (isset($map['LeniIpv6SipQuota'])) {
            $model->leniIpv6SipQuota = $map['LeniIpv6SipQuota'];
        }

        if (isset($map['LeniQuota'])) {
            $model->leniQuota = $map['LeniQuota'];
        }

        if (isset($map['LeniSipQuota'])) {
            $model->leniSipQuota = $map['LeniSipQuota'];
        }

        if (isset($map['LniSipQuota'])) {
            $model->lniSipQuota = $map['LniSipQuota'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $n1 = 0;
                foreach ($map['VSwitches'] as $item1) {
                    $model->vSwitches[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
