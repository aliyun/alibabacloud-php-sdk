<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogResponseBody\sensitiveDataAuditLogList\sensitiveDataLog;

class sensitiveDataAuditLogList extends Model
{
    /**
     * @var string
     */
    public $dbDisplayName;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $moduleName;

    /**
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
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbDisplayName' => 'DbDisplayName',
        'instanceId' => 'InstanceId',
        'moduleName' => 'ModuleName',
        'opTime' => 'OpTime',
        'sensitiveDataLog' => 'SensitiveDataLog',
        'targetName' => 'TargetName',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveDataLog)) {
            Model::validateArray($this->sensitiveDataLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sensitiveDataLog)) {
                $res['SensitiveDataLog'] = [];
                $n1 = 0;
                foreach ($this->sensitiveDataLog as $item1) {
                    $res['SensitiveDataLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['SensitiveDataLog'] as $item1) {
                    $model->sensitiveDataLog[$n1++] = sensitiveDataLog::fromMap($item1);
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
