<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancePlansModificationResponseBody;

use AlibabaCloud\Tea\Model;

class plans extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $core;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $flow;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var float
     */
    public $originPrice;

    /**
     * @var string
     */
    public $planId;

    /**
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
