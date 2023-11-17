<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteOpaStrategyNewRequest extends Model
{
    /**
     * @var int[]
     */
    public $strategyIds;
    protected $_name = [
        'strategyIds' => 'StrategyIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyIds) {
            $res['StrategyIds'] = $this->strategyIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOpaStrategyNewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyIds'])) {
            if (!empty($map['StrategyIds'])) {
                $model->strategyIds = $map['StrategyIds'];
            }
        }

        return $model;
    }
}
