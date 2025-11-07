<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyBlackListStrategyRequest\blackListStrategy;

class ModifyBlackListStrategyRequest extends Model
{
    /**
     * @var blackListStrategy
     */
    public $blackListStrategy;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'blackListStrategy' => 'BlackListStrategy',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->blackListStrategy) {
            $this->blackListStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackListStrategy) {
            $res['BlackListStrategy'] = null !== $this->blackListStrategy ? $this->blackListStrategy->toArray($noStream) : $this->blackListStrategy;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BlackListStrategy'])) {
            $model->blackListStrategy = blackListStrategy::fromMap($map['BlackListStrategy']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
