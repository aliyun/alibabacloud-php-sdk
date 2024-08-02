<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateDownloadJobRequest;

use AlibabaCloud\SDK\Sls\V20201230\Models\CreateDownloadJobRequest\configuration\sink;
use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $allowInComplete;

    /**
     * @description 起点时间戳（精确到秒）
     *
     * This parameter is required.
     * @example 1722406260
     *
     * @var int
     */
    public $fromTime;

    /**
     * @description 源logstore
     *
     * This parameter is required.
     * @example test-logstore
     *
     * @var string
     */
    public $logstore;

    /**
     * @description 是否启用powerSql
     *
     * @example true
     *
     * @var bool
     */
    public $powerSql;

    /**
     * @description 查询语句
     *
     * This parameter is required.
     * @example * | select *
     *
     * @var string
     */
    public $query;

    /**
     * @description 导出配置
     *
     * This parameter is required.
     * @var sink
     */
    public $sink;

    /**
     * @description 结束时间戳（精确到秒）
     *
     * This parameter is required.
     * @example 1722409860
     *
     * @var int
     */
    public $toTime;
    protected $_name = [
        'allowInComplete' => 'allowInComplete',
        'fromTime'        => 'fromTime',
        'logstore'        => 'logstore',
        'powerSql'        => 'powerSql',
        'query'           => 'query',
        'sink'            => 'sink',
        'toTime'          => 'toTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowInComplete) {
            $res['allowInComplete'] = $this->allowInComplete;
        }
        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->powerSql) {
            $res['powerSql'] = $this->powerSql;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sink) {
            $res['sink'] = null !== $this->sink ? $this->sink->toMap() : null;
        }
        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowInComplete'])) {
            $model->allowInComplete = $map['allowInComplete'];
        }
        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['powerSql'])) {
            $model->powerSql = $map['powerSql'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sink'])) {
            $model->sink = sink::fromMap($map['sink']);
        }
        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
