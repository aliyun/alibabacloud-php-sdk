<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;

use AlibabaCloud\Tea\Model;

class resourceInstanceList extends Model
{
    /**
     * @var string
     */
    public $apportionCode;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $resourceUserId;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'apportionCode'  => 'ApportionCode',
        'commodityCode'  => 'CommodityCode',
        'resourceUserId' => 'ResourceUserId',
        'resourceId'     => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apportionCode) {
            $res['ApportionCode'] = $this->apportionCode;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->resourceUserId) {
            $res['ResourceUserId'] = $this->resourceUserId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApportionCode'])) {
            $model->apportionCode = $map['ApportionCode'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ResourceUserId'])) {
            $model->resourceUserId = $map['ResourceUserId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
