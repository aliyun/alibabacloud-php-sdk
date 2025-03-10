<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIPListResponseBody extends Model
{
    /**
     * @description The name of the instance.
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The name of the whitelist.
     *
     * @example group1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The tag of the whitelist.
     *
     * @example grouptag
     *
     * @var string
     */
    public $groupTag;

    /**
     * @description The request ID.
     *
     * @example 195F64C2-8F11-532B-A436-FC08A221D756
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IP addresses in the whitelist of the instance. Multiple IP addresses are separated by commas (,).
     *
     * @example 127.0.XX.XX,127.2.XX.XX
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @description The IP address type.
     *
     * @example ipv4
     *
     * @var string
     */
    public $securityIPType;

    /**
     * @description The task ID.
     *
     * @example 479095561
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The network type of the whitelist.
     *
     * @example mix
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifySecurityIPListResponseBody
     */
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
