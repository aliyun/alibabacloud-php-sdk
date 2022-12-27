<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class AddFCTriggerRequest extends Model
{
    /**
     * @description The name of the event.
     *
     * @example LogFileCreated
     *
     * @var string
     */
    public $eventMetaName;

    /**
     * @description The version of the event.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $eventMetaVersion;

    /**
     * @description The feature trigger.
     *
     * @example acs:fc:1223455566666:123:services/myservice/functions/myfunction
     *
     * @var string
     */
    public $functionARN;

    /**
     * @description The remarks.
     *
     * @example test
     *
     * @var string
     */
    public $notes;

    /**
     * @description 用户ID。
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The assigned Resource Access Management (RAM) role.
     *
     * @example acs:ram:: 1234567890:role/aliyuncdneventnotificationrole
     *
     * @var string
     */
    public $roleARN;

    /**
     * @description The resources and filters for event listening.
     *
     * @example acs:cdn:*:1234567890:domain/example.com
     *
     * @var string
     */
    public $sourceARN;

    /**
     * @description The trigger that corresponds to the Function Compute service.
     *
     * @example acs:fc:cn-beijing: 1234567890:services/FCTestService/functions/printEvent/triggers/testtrigger
     *
     * @var string
     */
    public $triggerARN;
    protected $_name = [
        'eventMetaName'    => 'EventMetaName',
        'eventMetaVersion' => 'EventMetaVersion',
        'functionARN'      => 'FunctionARN',
        'notes'            => 'Notes',
        'ownerId'          => 'OwnerId',
        'roleARN'          => 'RoleARN',
        'sourceARN'        => 'SourceARN',
        'triggerARN'       => 'TriggerARN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventMetaName) {
            $res['EventMetaName'] = $this->eventMetaName;
        }
        if (null !== $this->eventMetaVersion) {
            $res['EventMetaVersion'] = $this->eventMetaVersion;
        }
        if (null !== $this->functionARN) {
            $res['FunctionARN'] = $this->functionARN;
        }
        if (null !== $this->notes) {
            $res['Notes'] = $this->notes;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->roleARN) {
            $res['RoleARN'] = $this->roleARN;
        }
        if (null !== $this->sourceARN) {
            $res['SourceARN'] = $this->sourceARN;
        }
        if (null !== $this->triggerARN) {
            $res['TriggerARN'] = $this->triggerARN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFCTriggerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventMetaName'])) {
            $model->eventMetaName = $map['EventMetaName'];
        }
        if (isset($map['EventMetaVersion'])) {
            $model->eventMetaVersion = $map['EventMetaVersion'];
        }
        if (isset($map['FunctionARN'])) {
            $model->functionARN = $map['FunctionARN'];
        }
        if (isset($map['Notes'])) {
            $model->notes = $map['Notes'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RoleARN'])) {
            $model->roleARN = $map['RoleARN'];
        }
        if (isset($map['SourceARN'])) {
            $model->sourceARN = $map['SourceARN'];
        }
        if (isset($map['TriggerARN'])) {
            $model->triggerARN = $map['TriggerARN'];
        }

        return $model;
    }
}
