<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class AlertStrategyRelation extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $strategyUuid;
    protected $_name = [
        'alertName' => 'AlertName',
        'strategyUuid' => 'StrategyUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }

        if (null !== $this->strategyUuid) {
            $res['StrategyUuid'] = $this->strategyUuid;
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
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }

        if (isset($map['StrategyUuid'])) {
            $model->strategyUuid = $map['StrategyUuid'];
        }

        return $model;
    }
}
