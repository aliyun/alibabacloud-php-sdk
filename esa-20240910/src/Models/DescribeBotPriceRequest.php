<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DescribeBotPriceRequest extends Model
{
    /**
     * @var string
     */
    public $botInstanceLevel;
    protected $_name = [
        'botInstanceLevel' => 'BotInstanceLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botInstanceLevel) {
            $res['BotInstanceLevel'] = $this->botInstanceLevel;
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
        if (isset($map['BotInstanceLevel'])) {
            $model->botInstanceLevel = $map['BotInstanceLevel'];
        }

        return $model;
    }
}
