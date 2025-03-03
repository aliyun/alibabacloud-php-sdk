<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class CreateRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $eventBusName;
    /**
     * @var string
     */
    public $eventTargetsShrink;
    /**
     * @var string
     */
    public $filterPattern;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description'        => 'Description',
        'eventBusName'       => 'EventBusName',
        'eventTargetsShrink' => 'EventTargets',
        'filterPattern'      => 'FilterPattern',
        'ruleName'           => 'RuleName',
        'status'             => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->eventTargetsShrink) {
            $res['EventTargets'] = $this->eventTargetsShrink;
        }

        if (null !== $this->filterPattern) {
            $res['FilterPattern'] = $this->filterPattern;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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

        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['EventTargets'])) {
            $model->eventTargetsShrink = $map['EventTargets'];
        }

        if (isset($map['FilterPattern'])) {
            $model->filterPattern = $map['FilterPattern'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
