<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateRouteMapRuleRequest\matchConditions;
use AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateRouteMapRuleRequest\setActions;

class UpdateRouteMapRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var matchConditions
     */
    public $matchConditions;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $routeMapRuleId;

    /**
     * @var setActions
     */
    public $setActions;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'matchConditions' => 'MatchConditions',
        'name' => 'Name',
        'priority' => 'Priority',
        'routeMapRuleId' => 'RouteMapRuleId',
        'setActions' => 'SetActions',
    ];

    public function validate()
    {
        if (null !== $this->matchConditions) {
            $this->matchConditions->validate();
        }
        if (null !== $this->setActions) {
            $this->setActions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->matchConditions) {
            $res['MatchConditions'] = null !== $this->matchConditions ? $this->matchConditions->toArray($noStream) : $this->matchConditions;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->routeMapRuleId) {
            $res['RouteMapRuleId'] = $this->routeMapRuleId;
        }

        if (null !== $this->setActions) {
            $res['SetActions'] = null !== $this->setActions ? $this->setActions->toArray($noStream) : $this->setActions;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['MatchConditions'])) {
            $model->matchConditions = matchConditions::fromMap($map['MatchConditions']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RouteMapRuleId'])) {
            $model->routeMapRuleId = $map['RouteMapRuleId'];
        }

        if (isset($map['SetActions'])) {
            $model->setActions = setActions::fromMap($map['SetActions']);
        }

        return $model;
    }
}
