<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ShopCreateRequest extends Model
{
    /**
     * @var string
     */
    public $afterSaleDingTalkId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $operatorDingTalkId;

    /**
     * @var string
     */
    public $preSaleDingTalkId;

    /**
     * @var string
     */
    public $shopName;
    protected $_name = [
        'afterSaleDingTalkId' => 'afterSaleDingTalkId',
        'description' => 'description',
        'operatorDingTalkId' => 'operatorDingTalkId',
        'preSaleDingTalkId' => 'preSaleDingTalkId',
        'shopName' => 'shopName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
