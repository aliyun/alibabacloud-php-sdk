<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogResponseBody\sensitiveDataAuditLogList\sensitiveDataLog;
use AlibabaCloud\Tea\Model;

class sensitiveDataAuditLogList extends Model
{
    /**
     * @example ExampleDbName@xxx.xxx.xxx.xxx:3306
     *
     * @var string
     */
    public $dbDisplayName;

    /**
     * @example 12****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example SQL_CONSOLE
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example 2022-11-18 10:01:00
     *
     * @var string
     */
    public $opTime;

    /**
     * @var sensitiveDataLog[]
     */
    public $sensitiveDataLog;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @example 1**
     *
     * @var int
     */
    public $userId;

    /**
     * @example ExampleUserName
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbDisplayName'    => 'DbDisplayName',
        'instanceId'       => 'InstanceId',
        'moduleName'       => 'ModuleName',
        'opTime'           => 'OpTime',
        'sensitiveDataLog' => 'SensitiveDataLog',
        'targetName'       => 'TargetName',
        'userId'           => 'UserId',
        'userName'         => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbDisplayName) {
            $res['DbDisplayName'] = $this->dbDisplayName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->opTime) {
            $res['OpTime'] = $this->opTime;
        }
        if (null !== $this->sensitiveDataLog) {
            $res['SensitiveDataLog'] = [];
            if (null !== $this->sensitiveDataLog && \is_array($this->sensitiveDataLog)) {
                $n = 0;
                foreach ($this->sensitiveDataLog as $item) {
                    $res['SensitiveDataLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sensitiveDataAuditLogList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbDisplayName'])) {
            $model->dbDisplayName = $map['DbDisplayName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['OpTime'])) {
            $model->opTime = $map['OpTime'];
        }
        if (isset($map['SensitiveDataLog'])) {
            if (!empty($map['SensitiveDataLog'])) {
                $model->sensitiveDataLog = [];
                $n                       = 0;
                foreach ($map['SensitiveDataLog'] as $item) {
                    $model->sensitiveDataLog[$n++] = null !== $item ? sensitiveDataLog::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
