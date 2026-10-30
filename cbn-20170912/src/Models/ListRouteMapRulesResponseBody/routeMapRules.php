<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListRouteMapRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListRouteMapRulesResponseBody\routeMapRules\matchConditions;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListRouteMapRulesResponseBody\routeMapRules\setActions;

class routeMapRules extends Model
{
    /**
     * @var string
     */
    public $description;

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
    public $routeMapId;

    /**
     * @var string
     */
    public $routeMapRuleId;

    /**
     * @var setActions
     */
    public $setActions;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'matchConditions' => 'MatchConditions',
        'name' => 'Name',
        'priority' => 'Priority',
        'routeMapId' => 'RouteMapId',
        'routeMapRuleId' => 'RouteMapRuleId',
        'setActions' => 'SetActions',
        'status' => 'Status',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }

        if (null !== $this->routeMapRuleId) {
            $res['RouteMapRuleId'] = $this->routeMapRuleId;
        }

        if (null !== $this->setActions) {
            $res['SetActions'] = null !== $this->setActions ? $this->setActions->toArray($noStream) : $this->setActions;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }

        if (isset($map['RouteMapRuleId'])) {
            $model->routeMapRuleId = $map['RouteMapRuleId'];
        }

        if (isset($map['SetActions'])) {
            $model->setActions = setActions::fromMap($map['SetActions']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
