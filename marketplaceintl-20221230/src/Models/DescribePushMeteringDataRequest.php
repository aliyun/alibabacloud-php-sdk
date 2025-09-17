<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models;

use AlibabaCloud\Dara\Model;

class DescribePushMeteringDataRequest extends Model
{
    /**
     * @var string
     */
    public $pushOrderBizId;
    protected $_name = [
        'pushOrderBizId' => 'PushOrderBizId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushOrderBizId) {
            $res['PushOrderBizId'] = $this->pushOrderBizId;
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
        if (isset($map['PushOrderBizId'])) {
            $model->pushOrderBizId = $map['PushOrderBizId'];
        }

        return $model;
    }
}
