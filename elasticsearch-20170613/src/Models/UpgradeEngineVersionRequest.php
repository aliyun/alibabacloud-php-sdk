<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpgradeEngineVersionRequest\plugins;
use AlibabaCloud\Tea\Model;

class UpgradeEngineVersionRequest extends Model
{
    /**
     * @var plugins[]
     */
    public $plugins;

    /**
     * @example engineVersion
     *
     * @var string
     */
    public $type;

    /**
     * @example 6.7
     *
     * @var string
     */
    public $version;

    /**
     * @description The moderation results.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The monitoring type. Valid values:
     *
     *   checkClusterHealth: Cluster Health Status
     *   checkConfigCompatible: Configuration Compatibility Status
     *   checkClusterResource: resource space status
     *   checkClusterSnapshot: Whether a snapshot exists
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'plugins'     => 'plugins',
        'type'        => 'type',
        'version'     => 'version',
        'clientToken' => 'clientToken',
        'dryRun'      => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plugins) {
            $res['plugins'] = [];
            if (null !== $this->plugins && \is_array($this->plugins)) {
                $n = 0;
                foreach ($this->plugins as $item) {
                    $res['plugins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeEngineVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['plugins'])) {
            if (!empty($map['plugins'])) {
                $model->plugins = [];
                $n              = 0;
                foreach ($map['plugins'] as $item) {
                    $model->plugins[$n++] = null !== $item ? plugins::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
