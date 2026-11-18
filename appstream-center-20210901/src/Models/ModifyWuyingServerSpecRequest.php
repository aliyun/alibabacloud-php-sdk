<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyWuyingServerSpecRequest extends Model
{
    /**
     * @var string
     */
    public $afterStatus;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $serverInstanceType;

    /**
     * @var string
     */
    public $wuyingServerId;
    protected $_name = [
        'afterStatus' => 'AfterStatus',
        'productType' => 'ProductType',
        'promotionId' => 'PromotionId',
        'serverInstanceType' => 'ServerInstanceType',
        'wuyingServerId' => 'WuyingServerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterStatus) {
            $res['AfterStatus'] = $this->afterStatus;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->serverInstanceType) {
            $res['ServerInstanceType'] = $this->serverInstanceType;
        }

        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
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
        if (isset($map['AfterStatus'])) {
            $model->afterStatus = $map['AfterStatus'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['ServerInstanceType'])) {
            $model->serverInstanceType = $map['ServerInstanceType'];
        }

        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        return $model;
    }
}
