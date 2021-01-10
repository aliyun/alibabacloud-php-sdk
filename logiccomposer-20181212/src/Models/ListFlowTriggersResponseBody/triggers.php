<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowTriggersResponseBody;

use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @var string
     */
    public $triggerName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $actionsCount;

    /**
     * @var string
     */
    public $triggerActionName;

    /**
     * @var string
     */
    public $triggerDescription;

    /**
     * @var string
     */
    public $triggerActionDescription;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'triggerName'              => 'TriggerName',
        'endpoint'                 => 'Endpoint',
        'actionsCount'             => 'ActionsCount',
        'triggerActionName'        => 'TriggerActionName',
        'triggerDescription'       => 'TriggerDescription',
        'triggerActionDescription' => 'TriggerActionDescription',
        'triggerType'              => 'TriggerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->triggerName) {
            $res['TriggerName'] = $this->triggerName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->actionsCount) {
            $res['ActionsCount'] = $this->actionsCount;
        }
        if (null !== $this->triggerActionName) {
            $res['TriggerActionName'] = $this->triggerActionName;
        }
        if (null !== $this->triggerDescription) {
            $res['TriggerDescription'] = $this->triggerDescription;
        }
        if (null !== $this->triggerActionDescription) {
            $res['TriggerActionDescription'] = $this->triggerActionDescription;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TriggerName'])) {
            $model->triggerName = $map['TriggerName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ActionsCount'])) {
            $model->actionsCount = $map['ActionsCount'];
        }
        if (isset($map['TriggerActionName'])) {
            $model->triggerActionName = $map['TriggerActionName'];
        }
        if (isset($map['TriggerDescription'])) {
            $model->triggerDescription = $map['TriggerDescription'];
        }
        if (isset($map['TriggerActionDescription'])) {
            $model->triggerActionDescription = $map['TriggerActionDescription'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
