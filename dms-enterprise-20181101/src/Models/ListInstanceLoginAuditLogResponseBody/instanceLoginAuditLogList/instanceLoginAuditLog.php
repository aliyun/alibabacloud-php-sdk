<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponseBody\instanceLoginAuditLogList;

use AlibabaCloud\Tea\Model;

class instanceLoginAuditLog extends Model
{
    /**
     * @description The database account that is used to log on to the instance.
     *
     * @example test_User
     *
     * @var string
     */
    public $dbUser;

    /**
     * @description The ID of the instance.
     *
     * @example 177****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example rm-bp144d5ky4l4rli0417****.mysql.rds.aliyuncs.com:3306[rm-bp144d5ky4l4r****]
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The time when the user performed an operation on the instance.
     *
     * @example 2021-11-18 11:13:26
     *
     * @var string
     */
    public $opTime;

    /**
     * @description The source IP address of the request.
     *
     * @example 117.36.XX.XX,100.104.XX.XX
     *
     * @var string
     */
    public $requestIp;

    /**
     * @description The ID of the user.
     *
     * @example 12****
     *
     * @var int
     */
    public $userId;

    /**
     * @description The alias of the user.
     *
     * @example test_UserName
     *
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
