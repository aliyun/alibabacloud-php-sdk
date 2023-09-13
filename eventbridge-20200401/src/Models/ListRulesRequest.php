<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class ListRulesRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * @example default
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The maximum number of entries to be returned in a single call. You can use this parameter and the NextToken parameter to implement paging. A maximum of 100 entries can be returned in a single call.
     *
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description If you set the Limit parameter and excess return values exist, this parameter is returned.
     *
     * @example 1000
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The prefix of the rule name.
     *
     * @example test
     *
     * @var string
     */
    public $ruleNamePrefix;
    protected $_name = [
        'eventBusName'   => 'EventBusName',
        'limit'          => 'Limit',
        'nextToken'      => 'NextToken',
        'ruleNamePrefix' => 'RuleNamePrefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ruleNamePrefix) {
            $res['RuleNamePrefix'] = $this->ruleNamePrefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RuleNamePrefix'])) {
            $model->ruleNamePrefix = $map['RuleNamePrefix'];
        }

        return $model;
    }
}
