<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyEmptyNumberNoMoreCallsInfoRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $emptyNumberNoMoreCalls;

    /**
     * @example 6cc9f5ca-2cb6-4cc7-a46b-2bbfd3e61b22
     *
     * @var string
     */
    public $entryId;

    /**
     * @example 2
     *
     * @var int
     */
    public $strategyLevel;
    protected $_name = [
        'emptyNumberNoMoreCalls' => 'EmptyNumberNoMoreCalls',
        'entryId'                => 'EntryId',
        'strategyLevel'          => 'StrategyLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emptyNumberNoMoreCalls) {
            $res['EmptyNumberNoMoreCalls'] = $this->emptyNumberNoMoreCalls;
        }
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }
        if (null !== $this->strategyLevel) {
            $res['StrategyLevel'] = $this->strategyLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEmptyNumberNoMoreCallsInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmptyNumberNoMoreCalls'])) {
            $model->emptyNumberNoMoreCalls = $map['EmptyNumberNoMoreCalls'];
        }
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }
        if (isset($map['StrategyLevel'])) {
            $model->strategyLevel = $map['StrategyLevel'];
        }

        return $model;
    }
}
