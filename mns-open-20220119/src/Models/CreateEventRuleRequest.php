<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateEventRuleRequest\endpoints;
use AlibabaCloud\Tea\Model;

class CreateEventRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $eventTypes;

    /**
     * @description This parameter is required.
     *
     * @var EventMatchRule[][]
     */
    public $matchRules;

    /**
     * @description This parameter is required.
     *
     * @example oss
     *
     * @var string
     */
    public $productName;

    /**
     * @description This parameter is required.
     *
     * @example rule-xsXDW
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'endpoints' => 'Endpoints',
        'eventTypes' => 'EventTypes',
        'matchRules' => 'MatchRules',
        'productName' => 'ProductName',
        'ruleName' => 'RuleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventTypes) {
            $res['EventTypes'] = $this->eventTypes;
        }
        if (null !== $this->matchRules) {
            $res['MatchRules'] = $this->matchRules;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventTypes'])) {
            if (!empty($map['EventTypes'])) {
                $model->eventTypes = $map['EventTypes'];
            }
        }
        if (isset($map['MatchRules'])) {
            if (!empty($map['MatchRules'])) {
                $model->matchRules = $map['MatchRules'];
            }
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
