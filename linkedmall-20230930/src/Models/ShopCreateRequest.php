<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ShopCreateRequest extends Model
{
    /**
     * @example 12344335
     *
     * @var string
     */
    public $afterSaleDingTalkId;

    /**
     * @description This parameter is required.
     *
     * @example 店铺描述
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 12344335
     *
     * @var string
     */
    public $operatorDingTalkId;

    /**
     * @example 12344335
     *
     * @var string
     */
    public $preSaleDingTalkId;

    /**
     * @description This parameter is required.
     *
     * @example 店铺名称
     *
     * @var string
     */
    public $shopName;
    protected $_name = [
        'afterSaleDingTalkId' => 'afterSaleDingTalkId',
        'description'         => 'description',
        'operatorDingTalkId'  => 'operatorDingTalkId',
        'preSaleDingTalkId'   => 'preSaleDingTalkId',
        'shopName'            => 'shopName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterSaleDingTalkId) {
            $res['afterSaleDingTalkId'] = $this->afterSaleDingTalkId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->operatorDingTalkId) {
            $res['operatorDingTalkId'] = $this->operatorDingTalkId;
        }
        if (null !== $this->preSaleDingTalkId) {
            $res['preSaleDingTalkId'] = $this->preSaleDingTalkId;
        }
        if (null !== $this->shopName) {
            $res['shopName'] = $this->shopName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShopCreateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['afterSaleDingTalkId'])) {
            $model->afterSaleDingTalkId = $map['afterSaleDingTalkId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['operatorDingTalkId'])) {
            $model->operatorDingTalkId = $map['operatorDingTalkId'];
        }
        if (isset($map['preSaleDingTalkId'])) {
            $model->preSaleDingTalkId = $map['preSaleDingTalkId'];
        }
        if (isset($map['shopName'])) {
            $model->shopName = $map['shopName'];
        }

        return $model;
    }
}
