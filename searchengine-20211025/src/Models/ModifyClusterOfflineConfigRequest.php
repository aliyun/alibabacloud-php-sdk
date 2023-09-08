<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyClusterOfflineConfigRequest extends Model
{
    /**
     * @description The reindexing method. Valid values: api: API data source. indexRecover: data recovery through indexing.
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
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The type of the data source. Valid values: odps: MaxCompute. swift: Swift. unKnow: unknown type.
     *
     * @example odps
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description This parameter is required if the API data source experiences full indexing.
     *
     * @example 1640867288
     *
     * @var int
     */
    public $dataTimeSec;

    /**
     * @description The domain in which the data source is deployed.
     *
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the backward data delivery.
     *
     * @example 160142641
     *
     * @var int
     */
    public $generation;

    /**
     * @description This parameter is required if the MaxCompute data source experiences full indexing.
     *
     * @example 20211202
     *
     * @var string
     */
    public $partition;

    /**
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
