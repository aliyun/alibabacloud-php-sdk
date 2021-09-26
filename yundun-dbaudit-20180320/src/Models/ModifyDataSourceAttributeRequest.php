<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataSourceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $auditMode;

    /**
     * @var string
     */
    public $resultAuditMode;

    /**
     * @var int
     */
    public $resultAuditMaxLine;

    /**
     * @var int
     */
    public $resultAuditMaxSize;

    /**
     * @var string[]
     */
    public $dbIds;
    protected $_name = [
        'regionId'           => 'RegionId',
        'instanceId'         => 'InstanceId',
        'auditMode'          => 'AuditMode',
        'resultAuditMode'    => 'ResultAuditMode',
        'resultAuditMaxLine' => 'ResultAuditMaxLine',
        'resultAuditMaxSize' => 'ResultAuditMaxSize',
        'dbIds'              => 'DbIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->auditMode) {
            $res['AuditMode'] = $this->auditMode;
        }
        if (null !== $this->resultAuditMode) {
            $res['ResultAuditMode'] = $this->resultAuditMode;
        }
        if (null !== $this->resultAuditMaxLine) {
            $res['ResultAuditMaxLine'] = $this->resultAuditMaxLine;
        }
        if (null !== $this->resultAuditMaxSize) {
            $res['ResultAuditMaxSize'] = $this->resultAuditMaxSize;
        }
        if (null !== $this->dbIds) {
            $res['DbIds'] = $this->dbIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataSourceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AuditMode'])) {
            $model->auditMode = $map['AuditMode'];
        }
        if (isset($map['ResultAuditMode'])) {
            $model->resultAuditMode = $map['ResultAuditMode'];
        }
        if (isset($map['ResultAuditMaxLine'])) {
            $model->resultAuditMaxLine = $map['ResultAuditMaxLine'];
        }
        if (isset($map['ResultAuditMaxSize'])) {
            $model->resultAuditMaxSize = $map['ResultAuditMaxSize'];
        }
        if (isset($map['DbIds'])) {
            if (!empty($map['DbIds'])) {
                $model->dbIds = $map['DbIds'];
            }
        }

        return $model;
    }
}
