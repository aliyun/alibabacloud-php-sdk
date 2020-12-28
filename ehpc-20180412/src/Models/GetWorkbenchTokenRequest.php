<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetWorkbenchTokenRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPassword;

    /**
     * @var int
     */
    public $port;

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
    public $instanceId;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'userName'             => 'UserName',
        'userPassword'         => 'UserPassword',
        'port'                 => 'Port',
        'accountSessionTicket' => 'AccountSessionTicket',
        'accountUid'           => 'AccountUid',
        'instanceId'           => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userPassword) {
            $res['UserPassword'] = $this->userPassword;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->accountSessionTicket) {
            $res['AccountSessionTicket'] = $this->accountSessionTicket;
        }
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserPassword'])) {
            $model->userPassword = $map['UserPassword'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['AccountSessionTicket'])) {
            $model->accountSessionTicket = $map['AccountSessionTicket'];
        }
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
