<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainRegionsForSaleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'regionId' => 'RegionId',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = $this->typeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = $map['TypeList'];
            }
        }

        return $model;
    }
}
