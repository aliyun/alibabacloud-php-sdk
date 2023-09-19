<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class TriggerExecutionRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example dswe2-3i0-029
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The message body to be sent to the trigger task.
     *
     * @example {"eventTime": "20181226T220114.058+0800", "id": "9435EAD6-3CF6-4494-8F7A-3A********77","level": "INFO","name": "Instance:StateChange","product": "ECS","regionId":"cn-hangzhou","resourceId": "acs:ecs:cn-hangzhou:169070********30:instance/i-bp1ecr********5go2go","userId": "169070********30","ver": "1.0","content": {"resourceId": "i-bp1ecr********5go2go", "resourceType": "ALIYUN::ECS::Instance","state": "Stopping"} }
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the event-, alert-, or timer-triggered execution.
     *
     * @example exec-sadw3f23rsad
     *
     * @var string
     */
    public $executionId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the trigger. Valid values:
     *
     *   Event
     *   Alarm
     *   Timer
     *
     * @example Event
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'content'     => 'Content',
        'executionId' => 'ExecutionId',
        'regionId'    => 'RegionId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
