<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\Dara\Model;

class interconnectConfig extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $ccnId;

    /**
     * @var string
     */
    public $ccnRegionId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $improvedPeriod;
    protected $_name = [
        'bandwidth' => 'bandwidth',
        'ccnId' => 'ccn_id',
        'ccnRegionId' => 'ccn_region_id',
        'cenId' => 'cen_id',
        'improvedPeriod' => 'improved_period',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->ccnId) {
            $res['ccn_id'] = $this->ccnId;
        }

        if (null !== $this->ccnRegionId) {
            $res['ccn_region_id'] = $this->ccnRegionId;
        }

        if (null !== $this->cenId) {
            $res['cen_id'] = $this->cenId;
        }

        if (null !== $this->improvedPeriod) {
            $res['improved_period'] = $this->improvedPeriod;
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
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }

        if (isset($map['ccn_id'])) {
            $model->ccnId = $map['ccn_id'];
        }

        if (isset($map['ccn_region_id'])) {
            $model->ccnRegionId = $map['ccn_region_id'];
        }

        if (isset($map['cen_id'])) {
            $model->cenId = $map['cen_id'];
        }

        if (isset($map['improved_period'])) {
            $model->improvedPeriod = $map['improved_period'];
        }

        return $model;
    }
}
