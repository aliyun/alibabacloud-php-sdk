<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class CreateEventRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $deliveryMode;

    /**
     * @var string
     */
    public $endpointShrink;

    /**
     * @var string
     */
    public $endpointsShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $eventTypesShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $matchRulesShrink;

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
        'clientToken' => 'ClientToken',
        'deliveryMode' => 'DeliveryMode',
        'endpointShrink' => 'Endpoint',
        'endpointsShrink' => 'Endpoints',
        'eventTypesShrink' => 'EventTypes',
        'matchRulesShrink' => 'MatchRules',
        'productName' => 'ProductName',
        'ruleName' => 'RuleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deliveryMode) {
            $res['DeliveryMode'] = $this->deliveryMode;
        }
        if (null !== $this->endpointShrink) {
            $res['Endpoint'] = $this->endpointShrink;
        }
        if (null !== $this->endpointsShrink) {
            $res['Endpoints'] = $this->endpointsShrink;
        }
        if (null !== $this->eventTypesShrink) {
            $res['EventTypes'] = $this->eventTypesShrink;
        }
        if (null !== $this->matchRulesShrink) {
            $res['MatchRules'] = $this->matchRulesShrink;
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
     * @return CreateEventRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeliveryMode'])) {
            $model->deliveryMode = $map['DeliveryMode'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpointShrink = $map['Endpoint'];
        }
        if (isset($map['Endpoints'])) {
            $model->endpointsShrink = $map['Endpoints'];
        }
        if (isset($map['EventTypes'])) {
            $model->eventTypesShrink = $map['EventTypes'];
        }
        if (isset($map['MatchRules'])) {
            $model->matchRulesShrink = $map['MatchRules'];
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
