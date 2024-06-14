<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class BuildIndexRequest extends Model
{
    /**
     * @description The reindexing mode.
     *
     * @example indexRecover
     *
     * @var string
     */
    public $buildMode;

    /**
     * @description The name of the data source.
     *
     * @example my_data_source
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The type of the data source.
     *
     * @example swift
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The timestamp in seconds. The value must be of the INTEGER type. This parameter is required if you specify an API data source.
     *
     * @example 1640867288
     *
     * @var int
     */
    public $dataTimeSec;

    /**
     * @description The data center in which the data source resides.
     *
     * @example test
     *
     * @var string
     */
    public $domain;

    /**
     * @description The data restoration version.
     *
     * @example 160131146
     *
     * @var int
     */
    public $generation;

    /**
     * @description The data partition. This parameter is required if dataSourceType is set to odps.
     *
     * @example 20201010
     *
     * @var string
     */
    public $partition;
    protected $_name = [
        'buildMode'      => 'buildMode',
        'dataSourceName' => 'dataSourceName',
        'dataSourceType' => 'dataSourceType',
        'dataTimeSec'    => 'dataTimeSec',
        'domain'         => 'domain',
        'generation'     => 'generation',
        'partition'      => 'partition',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BuildIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buildMode'])) {
            $model->buildMode = $map['buildMode'];
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

        return $model;
    }
}
