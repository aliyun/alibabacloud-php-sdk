<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class RestartAppInstanceRequest extends Model
{
    /**
     * @description appId
     *
     * @var int
     */
    public $appId;

    /**
     * @description appInstanceIdList
     *
     * @var int[]
     */
    public $appInstanceIdList;

    /**
     * @description envId
     *
     * @var int
     */
    public $envId;
    protected $_name = [
        'appId'             => 'AppId',
        'appInstanceIdList' => 'AppInstanceIdList',
        'envId'             => 'EnvId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInstanceIdList) {
            $res['AppInstanceIdList'] = $this->appInstanceIdList;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartAppInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceIdList'])) {
            if (!empty($map['AppInstanceIdList'])) {
                $model->appInstanceIdList = $map['AppInstanceIdList'];
            }
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }

        return $model;
    }
}
