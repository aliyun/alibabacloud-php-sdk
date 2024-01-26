<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody\data;

use AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody\data\impacts\product;
use AlibabaCloud\SDK\Status\V20200117\Models\ListEventInProgressResponseBody\data\impacts\region;
use AlibabaCloud\Tea\Model;

class impacts extends Model
{
    /**
     * @var product
     */
    public $product;

    /**
     * @example 1680660940017
     *
     * @var int
     */
    public $recoveryTime;

    /**
     * @var region
     */
    public $region;

    /**
     * @example 1680660940017
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'product'      => 'Product',
        'recoveryTime' => 'RecoveryTime',
        'region'       => 'Region',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = null !== $this->product ? $this->product->toMap() : null;
        }
        if (null !== $this->recoveryTime) {
            $res['RecoveryTime'] = $this->recoveryTime;
        }
        if (null !== $this->region) {
            $res['Region'] = null !== $this->region ? $this->region->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return impacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = product::fromMap($map['Product']);
        }
        if (isset($map['RecoveryTime'])) {
            $model->recoveryTime = $map['RecoveryTime'];
        }
        if (isset($map['Region'])) {
            $model->region = region::fromMap($map['Region']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
