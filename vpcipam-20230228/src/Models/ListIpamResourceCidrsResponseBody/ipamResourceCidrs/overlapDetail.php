<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody\ipamResourceCidrs;

use AlibabaCloud\Dara\Model;

class overlapDetail extends Model
{
    /**
     * @var string
     */
    public $overlapResourceCidr;
    /**
     * @var string
     */
    public $overlapResourceId;
    /**
     * @var string
     */
    public $overlapResourceRegion;
    protected $_name = [
        'overlapResourceCidr'   => 'OverlapResourceCidr',
        'overlapResourceId'     => 'OverlapResourceId',
        'overlapResourceRegion' => 'OverlapResourceRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overlapResourceCidr) {
            $res['OverlapResourceCidr'] = $this->overlapResourceCidr;
        }

        if (null !== $this->overlapResourceId) {
            $res['OverlapResourceId'] = $this->overlapResourceId;
        }

        if (null !== $this->overlapResourceRegion) {
            $res['OverlapResourceRegion'] = $this->overlapResourceRegion;
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
        if (isset($map['OverlapResourceCidr'])) {
            $model->overlapResourceCidr = $map['OverlapResourceCidr'];
        }

        if (isset($map['OverlapResourceId'])) {
            $model->overlapResourceId = $map['OverlapResourceId'];
        }

        if (isset($map['OverlapResourceRegion'])) {
            $model->overlapResourceRegion = $map['OverlapResourceRegion'];
        }

        return $model;
    }
}
