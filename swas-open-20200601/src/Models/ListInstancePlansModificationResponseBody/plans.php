<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationResponseBody;

use AlibabaCloud\Tea\Model;

class plans extends Model
{
    /**
     * @description The peak bandwidth. Unit: Mbit/s.
     *
     * @example 3
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var int
     */
    public $core;

    /**
     * @description The unit of the plan price. Valid values:
     *
     *   CNY
     *   USD
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The disk size of the simple application server. Unit: GB.
     *
     * @example 40
     *
     * @var int
     */
    public $diskSize;

    /**
     * @description The category of the disk. Valid values:
     *
     *   SSD: standard SSD
     *   ESSD: enhanced SSD
     *
     * @example ESSD
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The monthly data transfer quota. Unit: GB.
     *
     * @example 400
     *
     * @var int
     */
    public $flow;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 1
     *
     * @var int
     */
    public $memory;

    /**
     * @description The price of the plan.
     *
     * @example 60
     *
     * @var float
     */
    public $originPrice;

    /**
     * @description The ID of the plan.
     *
     * @example swas.s2.c2m1s40b3t04
     *
     * @var string
     */
    public $planId;

    /**
     * @description The operating system types supported by the plan.
     *
     * @example ["Linux","Windows"]
     *
     * @var string
     */
    public $supportPlatform;
    protected $_name = [
        'bandwidth'       => 'Bandwidth',
        'core'            => 'Core',
        'currency'        => 'Currency',
        'diskSize'        => 'DiskSize',
        'diskType'        => 'DiskType',
        'flow'            => 'Flow',
        'memory'          => 'Memory',
        'originPrice'     => 'OriginPrice',
        'planId'          => 'PlanId',
        'supportPlatform' => 'SupportPlatform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->supportPlatform) {
            $res['SupportPlatform'] = $this->supportPlatform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return plans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['SupportPlatform'])) {
            $model->supportPlatform = $map['SupportPlatform'];
        }

        return $model;
    }
}
