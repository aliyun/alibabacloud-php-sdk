<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifySecurityIPListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cc-xxxx
     *
     * @var int
     */
    public $DBInstanceID;

    /**
     * @example cc-xxxx
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example test
     *
     * @var string
     */
    public $groupTag;

    /**
     * @example 192.168.0.0/24,172.16.0.0/24
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @example ipv4
     *
     * @var string
     */
    public $securityIPType;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskId;

    /**
     * @example mix
     *
     * @var string
     */
    public $whitelistNetType;
    protected $_name = [
        'DBInstanceID'     => 'DBInstanceID',
        'DBInstanceName'   => 'DBInstanceName',
        'groupName'        => 'GroupName',
        'groupTag'         => 'GroupTag',
        'securityIPList'   => 'SecurityIPList',
        'securityIPType'   => 'SecurityIPType',
        'taskId'           => 'TaskId',
        'whitelistNetType' => 'WhitelistNetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupTag) {
            $res['GroupTag'] = $this->groupTag;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->securityIPType) {
            $res['SecurityIPType'] = $this->securityIPType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->whitelistNetType) {
            $res['WhitelistNetType'] = $this->whitelistNetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupTag'])) {
            $model->groupTag = $map['GroupTag'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SecurityIPType'])) {
            $model->securityIPType = $map['SecurityIPType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WhitelistNetType'])) {
            $model->whitelistNetType = $map['WhitelistNetType'];
        }

        return $model;
    }
}
