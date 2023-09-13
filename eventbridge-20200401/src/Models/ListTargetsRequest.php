<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class ListTargetsRequest extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the event rule.
     *
     * @example acs:fc:cn-hangzhou:118609547428****:services/fc-connector.a1/functions/event
     *
     * @var string
     */
    public $arn;

    /**
     * @description The name of the event bus.
     *
     * @example my-event-bus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description If you configure Limit and excess return values exist, this parameter is returned.
     *
     * @example 0
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The name of the event rule.
     *
     * @example tf-testacc-rule
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'arn'          => 'Arn',
        'eventBusName' => 'EventBusName',
        'limit'        => 'Limit',
        'nextToken'    => 'NextToken',
        'ruleName'     => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
