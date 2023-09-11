<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus;

use AlibabaCloud\SDK\Nlb\V20220430\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\nonNormalServers;
use AlibabaCloud\Tea\Model;

class serverGroupInfos extends Model
{
    /**
     * @description Indicates whether the health check feature is enabled. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var bool
     */
    public $heathCheckEnabled;

    /**
     * @description A list of unhealthy backend servers.
     *
     * @var nonNormalServers[]
     */
    public $nonNormalServers;

    /**
     * @description The ID of the server group.
     *
     * @example sgp-ppdpc14gdm3x4o****
     *
     * @var string
     */
    public $serverGroupId;
    protected $_name = [
        'heathCheckEnabled' => 'HeathCheckEnabled',
        'nonNormalServers'  => 'NonNormalServers',
        'serverGroupId'     => 'ServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->heathCheckEnabled) {
            $res['HeathCheckEnabled'] = $this->heathCheckEnabled;
        }
        if (null !== $this->nonNormalServers) {
            $res['NonNormalServers'] = [];
            if (null !== $this->nonNormalServers && \is_array($this->nonNormalServers)) {
                $n = 0;
                foreach ($this->nonNormalServers as $item) {
                    $res['NonNormalServers'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return serverGroupInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeathCheckEnabled'])) {
            $model->heathCheckEnabled = $map['HeathCheckEnabled'];
        }
        if (isset($map['NonNormalServers'])) {
            if (!empty($map['NonNormalServers'])) {
                $model->nonNormalServers = [];
                $n                       = 0;
                foreach ($map['NonNormalServers'] as $item) {
                    $model->nonNormalServers[$n++] = null !== $item ? nonNormalServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        return $model;
    }
}
