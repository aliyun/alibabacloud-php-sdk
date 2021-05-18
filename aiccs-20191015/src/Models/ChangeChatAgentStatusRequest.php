<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class ChangeChatAgentStatusRequest extends Model
{
    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 示例id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 账户名称
     *
     * @var string
     */
    public $accountName;

    /**
     * @description 修改到的状态类型
     *
     * @var string
     */
    public $method;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'instanceId'  => 'InstanceId',
        'accountName' => 'AccountName',
        'method'      => 'Method',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeChatAgentStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        return $model;
    }
}
