<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpgradeEngineVersionRequest extends Model
{
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
