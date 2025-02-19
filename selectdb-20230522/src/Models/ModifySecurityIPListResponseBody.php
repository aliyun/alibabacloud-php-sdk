<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class ModifySecurityIPListResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $groupTag;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $securityIPList;
    /**
     * @var string
     */
    public $securityIPType;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $whitelistNetType;
    protected $_name = [
        'DBInstanceName'   => 'DBInstanceName',
        'groupName'        => 'GroupName',
        'groupTag'         => 'GroupTag',
        'requestId'        => 'RequestId',
        'securityIPList'   => 'SecurityIPList',
        'securityIPType'   => 'SecurityIPType',
        'taskId'           => 'TaskId',
        'whitelistNetType' => 'WhitelistNetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupTag) {
            $res['GroupTag'] = $this->groupTag;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupTag'])) {
            $model->groupTag = $map['GroupTag'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
