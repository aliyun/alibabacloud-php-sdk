<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListNodeInfosForPodResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cluster-****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Lingjun Gaomi network interface controller quota
     *
     * @example 10
     *
     * @var int
     */
    public $hdeniQuota;

    /**
     * @description Lingjun Elastic Network Interface quota, excluding system type
     *
     * @example 10
     *
     * @var int
     */
    public $leniQuota;

    /**
     * @description Lingjun Elastic Network Interface Secondary Private IP Quota
     *
     * @example 10
     *
     * @var int
     */
    public $leniSipQuota;

    /**
     * @description Lingjun network interface controller Secondary Private IP Quota
     *
     * @example 10
     *
     * @var int
     */
    public $lniSipQuota;

    /**
     * @description The ID of the node for this operation.
     *
     * @example node-be70****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description List of VSwitches to which IP addresses can be applied for this node
     *
     * @var string[]
     */
    public $vSwitches;

    /**
     * @description The ID of the Virtual Private Cloud to which the current node belongs.
     *
     * @example vpc-j6ctp4n75306****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'hdeniQuota'   => 'HdeniQuota',
        'leniQuota'    => 'LeniQuota',
        'leniSipQuota' => 'LeniSipQuota',
        'lniSipQuota'  => 'LniSipQuota',
        'nodeId'       => 'NodeId',
        'regionId'     => 'RegionId',
        'vSwitches'    => 'VSwitches',
        'vpcId'        => 'VpcId',
        'zoneId'       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hdeniQuota) {
            $res['HdeniQuota'] = $this->hdeniQuota;
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
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HdeniQuota'])) {
            $model->hdeniQuota = $map['HdeniQuota'];
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
                $model->vSwitches = $map['VSwitches'];
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
