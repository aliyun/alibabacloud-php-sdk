<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecoveryPointsRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example sr-0008fj9dbe1xzlg6805i
     *
     * @var string
     */
    public $serverId;

    /**
     * @example 1633503912
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'serverId'      => 'ServerId',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecoveryPointsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
