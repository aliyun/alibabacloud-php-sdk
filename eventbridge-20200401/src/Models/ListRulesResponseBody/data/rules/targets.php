<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesResponseBody\data\rules;

use AlibabaCloud\Tea\Model;

class targets extends Model
{
    /**
     * @description The endpoint of the event target.
     *
     * @example acs:mns:cn-hangzhou:123456789098****:queues/myqueue
     *
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $errorsTolerance;

    /**
     * @description The ID of the custom event target.
     *
     * @example 177
     *
     * @var string
     */
    public $id;

    /**
     * @description The transformer that is used to push events.
     *
     * @example MATCHED_EVENT
     *
     * @var string
     */
    public $pushSelector;

    /**
     * @description The type of the event target. For more information, see [Event target parameters.](https://www.alibabacloud.com/help/en/eventbridge/latest/event-target-parameters)
     *
     * @example acs.mns.queue
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endpoint'        => 'Endpoint',
        'errorsTolerance' => 'ErrorsTolerance',
        'id'              => 'Id',
        'pushSelector'    => 'PushSelector',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->errorsTolerance) {
            $res['ErrorsTolerance'] = $this->errorsTolerance;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pushSelector) {
            $res['PushSelector'] = $this->pushSelector;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ErrorsTolerance'])) {
            $model->errorsTolerance = $map['ErrorsTolerance'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PushSelector'])) {
            $model->pushSelector = $map['PushSelector'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
