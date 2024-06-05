<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest\addedServers;
use AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest\removedServers;
use AlibabaCloud\Tea\Model;

class ReplaceServersInServerGroupRequest extends Model
{
    /**
     * @description The backend servers that you want to add to the server group. You can specify up to 40 backend servers in each call.
     *
     * This parameter is required.
     * @var addedServers[]
     */
    public $addedServers;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a `2xx` HTTP status code is returned and the operation is performed.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The backend servers that you want to remove.
     *
     * This parameter is required.
     * @var removedServers[]
     */
    public $removedServers;

    /**
     * @description The ID of the server group.
     *
     * This parameter is required.
     * @example sgp-5114d593o96qxy****
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
