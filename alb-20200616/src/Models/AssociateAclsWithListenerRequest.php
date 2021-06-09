<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class AssociateAclsWithListenerRequest extends Model
{
    /**
     * @description 访问控制策略Id
     *
     * @var string[]
     */
    public $aclIds;

    /**
     * @description 监听Id
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description 绑定类型
     *
     * @var string
     */
    public $aclType;

    /**
     * @description 预检此次请求
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'aclIds'      => 'AclIds',
        'listenerId'  => 'ListenerId',
        'aclType'     => 'AclType',
        'dryRun'      => 'DryRun',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclIds) {
            $res['AclIds'] = $this->aclIds;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateAclsWithListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = $map['AclIds'];
            }
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
