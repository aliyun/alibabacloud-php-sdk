<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class AcceptOperationTicketRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $effectCount;

    /**
     * @var string
     */
    public $effectEndTime;

    /**
     * @var string
     */
    public $effectStartTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operationTicketId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment' => 'Comment',
        'effectCount' => 'EffectCount',
        'effectEndTime' => 'EffectEndTime',
        'effectStartTime' => 'EffectStartTime',
        'instanceId' => 'InstanceId',
        'operationTicketId' => 'OperationTicketId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->effectCount) {
            $res['EffectCount'] = $this->effectCount;
        }

        if (null !== $this->effectEndTime) {
            $res['EffectEndTime'] = $this->effectEndTime;
        }

        if (null !== $this->effectStartTime) {
            $res['EffectStartTime'] = $this->effectStartTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->operationTicketId) {
            $res['OperationTicketId'] = $this->operationTicketId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['EffectCount'])) {
            $model->effectCount = $map['EffectCount'];
        }

        if (isset($map['EffectEndTime'])) {
            $model->effectEndTime = $map['EffectEndTime'];
        }

        if (isset($map['EffectStartTime'])) {
            $model->effectStartTime = $map['EffectStartTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OperationTicketId'])) {
            $model->operationTicketId = $map['OperationTicketId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
