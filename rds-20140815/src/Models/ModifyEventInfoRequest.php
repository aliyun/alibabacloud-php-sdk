<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventInfoRequest extends Model
{
    /**
     * @description The action parameter. Set this value in the JSON string format.
     *
     * @example {\\"recoverTime\\":\\"2023-04-17T14:02:35Z\\",\\"recoverMode\\":\\"timePoint\\"}
     *
     * @var string
     */
    public $actionParams;

    /**
     * @description The event handling action. Set this value to archive or undo.
     *
     * @example archive
     *
     * @var string
     */
    public $eventAction;

    /**
     * @description The event ID. Separate multiple event IDs with commas (,). You can configure up to 20 event IDs.
     *
     * This parameter is required.
     * @example 5422964
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'actionParams'  => 'ActionParams',
        'eventAction'   => 'EventAction',
        'eventId'       => 'EventId',
        'regionId'      => 'RegionId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->eventAction) {
            $res['EventAction'] = $this->eventAction;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['EventAction'])) {
            $model->eventAction = $map['EventAction'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
