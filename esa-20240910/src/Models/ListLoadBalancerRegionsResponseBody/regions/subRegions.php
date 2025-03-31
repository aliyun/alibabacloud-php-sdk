<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponseBody\regions;

use AlibabaCloud\Dara\Model;

class subRegions extends Model
{
    /**
     * @var string
     */
    public $subRegionCnName;

    /**
     * @var string
     */
    public $subRegionCode;

    /**
     * @var string
     */
    public $subRegionEnName;
    protected $_name = [
        'subRegionCnName' => 'SubRegionCnName',
        'subRegionCode' => 'SubRegionCode',
        'subRegionEnName' => 'SubRegionEnName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subRegionCnName) {
            $res['SubRegionCnName'] = $this->subRegionCnName;
        }

        if (null !== $this->subRegionCode) {
            $res['SubRegionCode'] = $this->subRegionCode;
        }

        if (null !== $this->subRegionEnName) {
            $res['SubRegionEnName'] = $this->subRegionEnName;
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
        if (isset($map['SubRegionCnName'])) {
            $model->subRegionCnName = $map['SubRegionCnName'];
        }

        if (isset($map['SubRegionCode'])) {
            $model->subRegionCode = $map['SubRegionCode'];
        }

        if (isset($map['SubRegionEnName'])) {
            $model->subRegionEnName = $map['SubRegionEnName'];
        }

        return $model;
    }
}
