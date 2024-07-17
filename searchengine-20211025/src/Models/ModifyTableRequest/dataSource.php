<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyTableRequest\dataSource\config;
use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @description Specifies whether to automatically rebuild the index.
     *
     * @example true
     *
     * @var bool
     */
    public $autoBuildIndex;

    /**
     * @description The configurations of the data source.
     *
     * @var config
     */
    public $config;

    /**
     * @description The start timestamp from which incremental data is retrieved.
     *
     * @example 1715160176
     *
     * @var int
     */
    public $dataTimeSec;
    protected $_name = [
        'autoBuildIndex' => 'autoBuildIndex',
        'config'         => 'config',
        'dataTimeSec'    => 'dataTimeSec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoBuildIndex) {
            $res['autoBuildIndex'] = $this->autoBuildIndex;
        }
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->dataTimeSec) {
            $res['dataTimeSec'] = $this->dataTimeSec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoBuildIndex'])) {
            $model->autoBuildIndex = $map['autoBuildIndex'];
        }
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }
        if (isset($map['dataTimeSec'])) {
            $model->dataTimeSec = $map['dataTimeSec'];
        }

        return $model;
    }
}
