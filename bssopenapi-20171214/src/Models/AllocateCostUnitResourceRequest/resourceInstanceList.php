<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceRequest;

use AlibabaCloud\Tea\Model;

class resourceInstanceList extends Model
{
    /**
     * @description The split item of the shared instance. This parameter is required only for shared instances.
     *
     *   Eight cloud services support bill splitting. The commodity codes of the eight services are oss, dcdn, snapshot, vod, cdn, live, cbwp, and pcdn.
     *   You can obtain the split item of a shared instance by calling QueryCostUnitResource operation to obtain all resource instances within a cost center.
     *
     * @example qwer1-cn-beijing
     *
     * @var string
     */
    public $apportionCode;

    /**
     * @description The commodity code of the resource instance.
     *
     * @example oss
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The ID of the resource instance.
     *
     * @example cn-hangzhou;standard
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The user ID of the resource instance owner.
     *
     * @example 273394581313325532
     *
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
