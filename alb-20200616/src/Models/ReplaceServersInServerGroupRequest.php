<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest\addedServers;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest\removedServers;
use AlibabaCloud\Tea\Model;

class ReplaceServersInServerGroupRequest extends Model
{
    /**
     * @description 待添加后端服务器
     *
     * @var addedServers[]
     */
    public $addedServers;

    /**
     * @description 幂等Token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 待删除后端服务器
     *
     * @var removedServers[]
     */
    public $removedServers;

    /**
     * @description 后端服务器Id
     *
     * @var string
     */
    public $serverGroupId;
    protected $_name = [
        'addedServers'   => 'AddedServers',
        'clientToken'    => 'ClientToken',
        'dryRun'         => 'DryRun',
        'removedServers' => 'RemovedServers',
        'serverGroupId'  => 'ServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addedServers) {
            $res['AddedServers'] = [];
            if (null !== $this->addedServers && \is_array($this->addedServers)) {
                $n = 0;
                foreach ($this->addedServers as $item) {
                    $res['AddedServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->removedServers) {
            $res['RemovedServers'] = [];
            if (null !== $this->removedServers && \is_array($this->removedServers)) {
                $n = 0;
                foreach ($this->removedServers as $item) {
                    $res['RemovedServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceServersInServerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddedServers'])) {
            if (!empty($map['AddedServers'])) {
                $model->addedServers = [];
                $n                   = 0;
                foreach ($map['AddedServers'] as $item) {
                    $model->addedServers[$n++] = null !== $item ? addedServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['RemovedServers'])) {
            if (!empty($map['RemovedServers'])) {
                $model->removedServers = [];
                $n                     = 0;
                foreach ($map['RemovedServers'] as $item) {
                    $model->removedServers[$n++] = null !== $item ? removedServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        return $model;
    }
}
