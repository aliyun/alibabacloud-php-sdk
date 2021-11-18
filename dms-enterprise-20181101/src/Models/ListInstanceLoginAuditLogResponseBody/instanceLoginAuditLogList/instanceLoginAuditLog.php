<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponseBody\instanceLoginAuditLogList;

use AlibabaCloud\Tea\Model;

class instanceLoginAuditLog extends Model
{
    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $opTime;

    /**
     * @var string
     */
    public $requestIp;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'dbUser'       => 'DbUser',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'opTime'       => 'OpTime',
        'requestIp'    => 'RequestIp',
        'userId'       => 'UserId',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->opTime) {
            $res['OpTime'] = $this->opTime;
        }
        if (null !== $this->requestIp) {
            $res['RequestIp'] = $this->requestIp;
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
     * @return instanceLoginAuditLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['OpTime'])) {
            $model->opTime = $map['OpTime'];
        }
        if (isset($map['RequestIp'])) {
            $model->requestIp = $map['RequestIp'];
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
