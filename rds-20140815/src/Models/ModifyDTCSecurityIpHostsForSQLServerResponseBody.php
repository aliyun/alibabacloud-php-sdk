<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDTCSecurityIpHostsForSQLServerResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The result of the whitelist configuration. Valid values:
     *
     *   **Success**
     *   **Fail**
     *
     * @example Success
     *
     * @var string
     */
    public $DTCSetResult;

    /**
     * @description The ID of the request.
     *
     * @example 671B6D32-B907-4EFF-A3B7-94D2EAD5E3A3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 178968983
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'DTCSetResult' => 'DTCSetResult',
        'requestId'    => 'RequestId',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DTCSetResult) {
            $res['DTCSetResult'] = $this->DTCSetResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDTCSecurityIpHostsForSQLServerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DTCSetResult'])) {
            $model->DTCSetResult = $map['DTCSetResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
