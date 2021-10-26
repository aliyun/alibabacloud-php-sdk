<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetWorkbenchTokenRequest extends Model
{
    /**
     * @var string
     */
    public $accountSessionTicket;

    /**
     * @var string
     */
    public $accountUid;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPassword;
    protected $_name = [
        'accountSessionTicket' => 'AccountSessionTicket',
        'accountUid'           => 'AccountUid',
        'clusterId'            => 'ClusterId',
        'instanceId'           => 'InstanceId',
        'port'                 => 'Port',
        'userName'             => 'UserName',
        'userPassword'         => 'UserPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountSessionTicket) {
            $res['AccountSessionTicket'] = $this->accountSessionTicket;
        }
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userPassword) {
            $res['UserPassword'] = $this->userPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkbenchTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountSessionTicket'])) {
            $model->accountSessionTicket = $map['AccountSessionTicket'];
        }
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserPassword'])) {
            $model->userPassword = $map['UserPassword'];
        }

        return $model;
    }
}
