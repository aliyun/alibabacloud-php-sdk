<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceCidrsResponseBody\ipamResourceCidrs;

use AlibabaCloud\Tea\Model;

class ipCountDetail extends Model
{
    /**
     * @var string
     */
    public $freeIpCount;

    /**
     * @var string
     */
    public $totalIpCount;

    /**
     * @var string
     */
    public $usedIpCount;
    protected $_name = [
        'freeIpCount' => 'FreeIpCount',
        'totalIpCount' => 'TotalIpCount',
        'usedIpCount' => 'UsedIpCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->freeIpCount) {
            $res['FreeIpCount'] = $this->freeIpCount;
        }
        if (null !== $this->totalIpCount) {
            $res['TotalIpCount'] = $this->totalIpCount;
        }
        if (null !== $this->usedIpCount) {
            $res['UsedIpCount'] = $this->usedIpCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipCountDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FreeIpCount'])) {
            $model->freeIpCount = $map['FreeIpCount'];
        }
        if (isset($map['TotalIpCount'])) {
            $model->totalIpCount = $map['TotalIpCount'];
        }
        if (isset($map['UsedIpCount'])) {
            $model->usedIpCount = $map['UsedIpCount'];
        }

        return $model;
    }
}
