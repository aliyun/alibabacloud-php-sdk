<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ModifyIndexOnlineStrategyRequest extends Model
{
    /**
     * @var int
     */
    public $changeRate;
    protected $_name = [
        'changeRate' => 'changeRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeRate) {
            $res['changeRate'] = $this->changeRate;
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
        if (isset($map['changeRate'])) {
            $model->changeRate = $map['changeRate'];
        }

        return $model;
    }
}
