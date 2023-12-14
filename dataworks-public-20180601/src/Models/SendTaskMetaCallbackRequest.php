<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class SendTaskMetaCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $connectionInfo;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $resources;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $taskEnvParam;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'code'           => 'Code',
        'connectionInfo' => 'ConnectionInfo',
        'endTime'        => 'EndTime',
        'resources'      => 'Resources',
        'startTime'      => 'StartTime',
        'subType'        => 'SubType',
        'taskEnvParam'   => 'TaskEnvParam',
        'tenantId'       => 'TenantId',
        'type'           => 'Type',
        'user'           => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->connectionInfo) {
            $res['ConnectionInfo'] = $this->connectionInfo;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->taskEnvParam) {
            $res['TaskEnvParam'] = $this->taskEnvParam;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendTaskMetaCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConnectionInfo'])) {
            $model->connectionInfo = $map['ConnectionInfo'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = $map['Resources'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['TaskEnvParam'])) {
            $model->taskEnvParam = $map['TaskEnvParam'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
