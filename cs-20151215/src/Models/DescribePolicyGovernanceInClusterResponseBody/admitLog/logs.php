<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyGovernanceInClusterResponseBody\admitLog;

use AlibabaCloud\Dara\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $constraintAction;

    /**
     * @var string
     */
    public $constraintApiVersion;

    /**
     * @var string
     */
    public $constraintCategory;

    /**
     * @var string
     */
    public $constraintGroup;

    /**
     * @var string
     */
    public $constraintKind;

    /**
     * @var string
     */
    public $constraintName;

    /**
     * @var string
     */
    public $eventMsg;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $requestUid;

    /**
     * @var string
     */
    public $requestUserinfo;

    /**
     * @var string
     */
    public $requestUsername;

    /**
     * @var string
     */
    public $resourceKind;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'constraintAction' => 'constraint_action',
        'constraintApiVersion' => 'constraint_api_version',
        'constraintCategory' => 'constraint_category',
        'constraintGroup' => 'constraint_group',
        'constraintKind' => 'constraint_kind',
        'constraintName' => 'constraint_name',
        'eventMsg' => 'event_msg',
        'eventType' => 'event_type',
        'requestUid' => 'request_uid',
        'requestUserinfo' => 'request_userinfo',
        'requestUsername' => 'request_username',
        'resourceKind' => 'resource_kind',
        'resourceName' => 'resource_name',
        'time' => 'time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->constraintAction) {
            $res['constraint_action'] = $this->constraintAction;
        }

        if (null !== $this->constraintApiVersion) {
            $res['constraint_api_version'] = $this->constraintApiVersion;
        }

        if (null !== $this->constraintCategory) {
            $res['constraint_category'] = $this->constraintCategory;
        }

        if (null !== $this->constraintGroup) {
            $res['constraint_group'] = $this->constraintGroup;
        }

        if (null !== $this->constraintKind) {
            $res['constraint_kind'] = $this->constraintKind;
        }

        if (null !== $this->constraintName) {
            $res['constraint_name'] = $this->constraintName;
        }

        if (null !== $this->eventMsg) {
            $res['event_msg'] = $this->eventMsg;
        }

        if (null !== $this->eventType) {
            $res['event_type'] = $this->eventType;
        }

        if (null !== $this->requestUid) {
            $res['request_uid'] = $this->requestUid;
        }

        if (null !== $this->requestUserinfo) {
            $res['request_userinfo'] = $this->requestUserinfo;
        }

        if (null !== $this->requestUsername) {
            $res['request_username'] = $this->requestUsername;
        }

        if (null !== $this->resourceKind) {
            $res['resource_kind'] = $this->resourceKind;
        }

        if (null !== $this->resourceName) {
            $res['resource_name'] = $this->resourceName;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['constraint_action'])) {
            $model->constraintAction = $map['constraint_action'];
        }

        if (isset($map['constraint_api_version'])) {
            $model->constraintApiVersion = $map['constraint_api_version'];
        }

        if (isset($map['constraint_category'])) {
            $model->constraintCategory = $map['constraint_category'];
        }

        if (isset($map['constraint_group'])) {
            $model->constraintGroup = $map['constraint_group'];
        }

        if (isset($map['constraint_kind'])) {
            $model->constraintKind = $map['constraint_kind'];
        }

        if (isset($map['constraint_name'])) {
            $model->constraintName = $map['constraint_name'];
        }

        if (isset($map['event_msg'])) {
            $model->eventMsg = $map['event_msg'];
        }

        if (isset($map['event_type'])) {
            $model->eventType = $map['event_type'];
        }

        if (isset($map['request_uid'])) {
            $model->requestUid = $map['request_uid'];
        }

        if (isset($map['request_userinfo'])) {
            $model->requestUserinfo = $map['request_userinfo'];
        }

        if (isset($map['request_username'])) {
            $model->requestUsername = $map['request_username'];
        }

        if (isset($map['resource_kind'])) {
            $model->resourceKind = $map['resource_kind'];
        }

        if (isset($map['resource_name'])) {
            $model->resourceName = $map['resource_name'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
