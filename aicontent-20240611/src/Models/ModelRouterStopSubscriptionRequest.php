<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterStopSubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $balanceType;
    protected $_name = [
        'balanceType' => 'balanceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->balanceType) {
            $res['balanceType'] = $this->balanceType;
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
        if (isset($map['balanceType'])) {
            $model->balanceType = $map['balanceType'];
        }

        return $model;
    }
}
