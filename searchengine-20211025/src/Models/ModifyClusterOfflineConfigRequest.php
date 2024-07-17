<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterOfflineConfigRequest extends Model
{
    /**
     * @description The reindexing method. Valid values: api: API data source. indexRecover: data recovery by using indexing.
     *
     * @example indexRecover
     *
     * @var string
     */
    public $buildMode;

    /**
     * @description The configuration name, which is stored as a key.
     *
     * @var int[]
     */
    public $config;

    /**
     * @description The name of the data source.
     *
     * @example test1
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The type of the data source. Valid values: odps: MaxCompute. swift: Swift. unKnow: unknown type.
     *
     * @example maxComputer
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description This parameter is required when index building by using API data sources is triggered.
     *
     * @example 1640867288
     *
     * @var int
     */
    public $dataTimeSec;

    /**
     * @description The data center in which the data source is deployed.
     *
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the full index version.
     *
     * @example 160142641
     *
     * @var int
     */
    public $generation;

    /**
     * @description This parameter is required when index building for full data in a MaxCompute data source is triggered.
     *
     * @example 20211202
     *
     * @var string
     */
    public $partition;

    /**
     * @description The push mode of the configuration. By default, only the configuration is pushed.
     *
     * @example PUSH_ONLY
     *
     * @var string
     */
    public $pushMode;
    protected $_name = [
        'buildMode'      => 'buildMode',
        'config'         => 'config',
        'dataSourceName' => 'dataSourceName',
        'dataSourceType' => 'dataSourceType',
        'dataTimeSec'    => 'dataTimeSec',
        'domain'         => 'domain',
        'generation'     => 'generation',
        'partition'      => 'partition',
        'pushMode'       => 'pushMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildMode) {
            $res['buildMode'] = $this->buildMode;
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceType) {
            $res['dataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->pushMode) {
            $res['pushMode'] = $this->pushMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterOfflineConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildMode'])) {
            $model->buildMode = $map['buildMode'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }
        if (isset($map['dataSourceType'])) {
            $model->dataSourceType = $map['dataSourceType'];
        }
        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['pushMode'])) {
            $model->pushMode = $map['pushMode'];
        }

        return $model;
    }
}
