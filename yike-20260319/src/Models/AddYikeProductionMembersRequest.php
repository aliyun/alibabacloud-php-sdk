<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class AddYikeProductionMembersRequest extends Model
{
    /**
     * @var string
     */
    public $productionId;

    /**
     * @var string
     */
    public $yikeUserIds;
    protected $_name = [
        'productionId' => 'ProductionId',
        'yikeUserIds' => 'YikeUserIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productionId) {
            $res['ProductionId'] = $this->productionId;
        }

        if (null !== $this->yikeUserIds) {
            $res['YikeUserIds'] = $this->yikeUserIds;
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
        if (isset($map['ProductionId'])) {
            $model->productionId = $map['ProductionId'];
        }

        if (isset($map['YikeUserIds'])) {
            $model->yikeUserIds = $map['YikeUserIds'];
        }

        return $model;
    }
}
