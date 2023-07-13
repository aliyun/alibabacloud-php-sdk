<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

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
        'alertName'    => 'AlertName',
        'strategyUuid' => 'StrategyUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return AlertStrategyRelation
     */
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
