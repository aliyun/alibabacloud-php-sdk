<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class UpdateYikeProductionMemberAuthRequest extends Model
{
    /**
     * @var string
     */
    public $auth;

    /**
     * @var string
     */
    public $productionId;

    /**
     * @var string
     */
    public $yikeUserId;
    protected $_name = [
        'auth' => 'Auth',
        'productionId' => 'ProductionId',
        'yikeUserId' => 'YikeUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auth) {
            $res['Auth'] = $this->auth;
        }

        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
        }

        if (null !== $this->yikeUserId) {
            $res['YikeUserId'] = $this->yikeUserId;
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
        if (isset($map['Auth'])) {
            $model->auth = $map['Auth'];
        }

        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        if (isset($map['YikeUserId'])) {
            $model->yikeUserId = $map['YikeUserId'];
        }

        return $model;
    }
}
