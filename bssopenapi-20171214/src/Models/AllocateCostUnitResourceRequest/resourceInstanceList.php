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
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceUserId;
    protected $_name = [
        'apportionCode'  => 'ApportionCode',
        'commodityCode'  => 'CommodityCode',
        'resourceId'     => 'ResourceId',
        'resourceUserId' => 'ResourceUserId',
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceUserId) {
            $res['ResourceUserId'] = $this->resourceUserId;
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceUserId'])) {
            $model->resourceUserId = $map['ResourceUserId'];
        }

        return $model;
    }
}
