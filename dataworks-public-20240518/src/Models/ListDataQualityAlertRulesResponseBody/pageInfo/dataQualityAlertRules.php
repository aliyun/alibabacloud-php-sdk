<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityAlertRulesResponseBody\pageInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityAlertRulesResponseBody\pageInfo\dataQualityAlertRules\notification;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityAlertRulesResponseBody\pageInfo\dataQualityAlertRules\target;
use AlibabaCloud\Tea\Model;

class dataQualityAlertRules extends Model
{
    /**
     * @example results.any { r -> r.status == \\"fail\\" && r.rule.severity == \\"High\\" }
     *
     * @var string
     */
    public $condition;

    /**
     * @example 26433
     *
     * @var int
     */
    public $id;

    /**
     * @var notification
     */
    public $notification;

    /**
     * @example 59094
     *
     * @var int
     */
    public $projectId;

    /**
     * @var target
     */
    public $target;
    protected $_name = [
        'condition' => 'Condition',
        'id' => 'Id',
        'notification' => 'Notification',
        'projectId' => 'ProjectId',
        'target' => 'Target',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataQualityAlertRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Notification'])) {
            $model->notification = notification::fromMap($map['Notification']);
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }

        return $model;
    }
}
