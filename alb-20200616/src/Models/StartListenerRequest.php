<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class StartListenerRequest extends Model
{
    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description  是否只预检此次请求
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 监听id
     *
     * @var string
     */
    public $listenerId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
        'listenerId'  => 'ListenerId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        return $model;
    }
}
