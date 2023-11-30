<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AuditLog extends Model
{
    /**
     * @var string
     */
    public $actedAt;

    /**
     * @var string
     */
    public $actionCategory;

    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $actorId;

    /**
     * @var string
     */
    public $actorName;

    /**
     * @var string
     */
    public $actorType;

    /**
     * @var string
     */
    public $clientDevice;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var AuditLogDetail
     */
    public $detail;

    /**
     * @var string
     */
    public $filePathType;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectName;
    protected $_name = [
        'actedAt'        => 'acted_at',
        'actionCategory' => 'action_category',
        'actionType'     => 'action_type',
        'actorId'        => 'actor_id',
        'actorName'      => 'actor_name',
        'actorType'      => 'actor_type',
        'clientDevice'   => 'client_device',
        'clientIp'       => 'client_ip',
        'clientType'     => 'client_type',
        'clientVersion'  => 'client_version',
        'detail'         => 'detail',
        'filePathType'   => 'file_path_type',
        'logId'          => 'log_id',
        'objectId'       => 'object_id',
        'objectName'     => 'object_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actedAt) {
            $res['acted_at'] = $this->actedAt;
        }
        if (null !== $this->actionCategory) {
            $res['action_category'] = $this->actionCategory;
        }
        if (null !== $this->actionType) {
            $res['action_type'] = $this->actionType;
        }
        if (null !== $this->actorId) {
            $res['actor_id'] = $this->actorId;
        }
        if (null !== $this->actorName) {
            $res['actor_name'] = $this->actorName;
        }
        if (null !== $this->actorType) {
            $res['actor_type'] = $this->actorType;
        }
        if (null !== $this->clientDevice) {
            $res['client_device'] = $this->clientDevice;
        }
        if (null !== $this->clientIp) {
            $res['client_ip'] = $this->clientIp;
        }
        if (null !== $this->clientType) {
            $res['client_type'] = $this->clientType;
        }
        if (null !== $this->clientVersion) {
            $res['client_version'] = $this->clientVersion;
        }
        if (null !== $this->detail) {
            $res['detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->filePathType) {
            $res['file_path_type'] = $this->filePathType;
        }
        if (null !== $this->logId) {
            $res['log_id'] = $this->logId;
        }
        if (null !== $this->objectId) {
            $res['object_id'] = $this->objectId;
        }
        if (null !== $this->objectName) {
            $res['object_name'] = $this->objectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acted_at'])) {
            $model->actedAt = $map['acted_at'];
        }
        if (isset($map['action_category'])) {
            $model->actionCategory = $map['action_category'];
        }
        if (isset($map['action_type'])) {
            $model->actionType = $map['action_type'];
        }
        if (isset($map['actor_id'])) {
            $model->actorId = $map['actor_id'];
        }
        if (isset($map['actor_name'])) {
            $model->actorName = $map['actor_name'];
        }
        if (isset($map['actor_type'])) {
            $model->actorType = $map['actor_type'];
        }
        if (isset($map['client_device'])) {
            $model->clientDevice = $map['client_device'];
        }
        if (isset($map['client_ip'])) {
            $model->clientIp = $map['client_ip'];
        }
        if (isset($map['client_type'])) {
            $model->clientType = $map['client_type'];
        }
        if (isset($map['client_version'])) {
            $model->clientVersion = $map['client_version'];
        }
        if (isset($map['detail'])) {
            $model->detail = AuditLogDetail::fromMap($map['detail']);
        }
        if (isset($map['file_path_type'])) {
            $model->filePathType = $map['file_path_type'];
        }
        if (isset($map['log_id'])) {
            $model->logId = $map['log_id'];
        }
        if (isset($map['object_id'])) {
            $model->objectId = $map['object_id'];
        }
        if (isset($map['object_name'])) {
            $model->objectName = $map['object_name'];
        }

        return $model;
    }
}
