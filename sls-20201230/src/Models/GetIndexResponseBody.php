<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponseBody\line;
use AlibabaCloud\Tea\Model;

class GetIndexResponseBody extends Model
{
    /**
     * @description 索引模式
     *
     * @var string
     */
    public $indexMode;

    /**
     * @description 字段索引配置。key为字段名称，value为索引配置。
     *
     * @var KeysValue[]
     */
    public $keys;

    /**
     * @description 上次修改时间
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description 配置全文索引。
     *
     * @var line
     */
    public $line;

    /**
     * @description 是否开启日志聚类.
     *
     * @var bool
     */
    public $logReduce;

    /**
     * @description 日志聚类的聚类字段过滤黑名单，仅当日志聚类开启时有效。
     *
     * @var string[]
     */
    public $logReduceBlackList;

    /**
     * @description 日志聚类的聚类字段过滤白名单，仅当日志聚类开启时有效。
     *
     * @var string[]
     */
    public $logReduceWhiteList;

    /**
     * @description 日志服务默认字段值的最大长度为2048字节，即2 KB。如果您需要修改字段值的最大长度，可设置统计字段（text）最大长度，取值范围为64~16384字节。
     *
     * @var int
     */
    public $maxTextLen;

    /**
     * @description 存储类型，目前固定取值为pg。
     *
     * @var string
     */
    public $storage;

    /**
     * @description 索引文件生命周期，支持7天、30天、90天。
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'indexMode'          => 'index_mode',
        'keys'               => 'keys',
        'lastModifyTime'     => 'lastModifyTime',
        'line'               => 'line',
        'logReduce'          => 'log_reduce',
        'logReduceBlackList' => 'log_reduce_black_list',
        'logReduceWhiteList' => 'log_reduce_white_list',
        'maxTextLen'         => 'max_text_len',
        'storage'            => 'storage',
        'ttl'                => 'ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexMode) {
            $res['index_mode'] = $this->indexMode;
        }
        if (null !== $this->keys) {
            $res['keys'] = [];
            if (null !== $this->keys && \is_array($this->keys)) {
                foreach ($this->keys as $key => $val) {
                    $res['keys'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->line) {
            $res['line'] = null !== $this->line ? $this->line->toMap() : null;
        }
        if (null !== $this->logReduce) {
            $res['log_reduce'] = $this->logReduce;
        }
        if (null !== $this->logReduceBlackList) {
            $res['log_reduce_black_list'] = $this->logReduceBlackList;
        }
        if (null !== $this->logReduceWhiteList) {
            $res['log_reduce_white_list'] = $this->logReduceWhiteList;
        }
        if (null !== $this->maxTextLen) {
            $res['max_text_len'] = $this->maxTextLen;
        }
        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
        }
        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIndexResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['index_mode'])) {
            $model->indexMode = $map['index_mode'];
        }
        if (isset($map['keys'])) {
            $model->keys = $map['keys'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }
        if (isset($map['line'])) {
            $model->line = line::fromMap($map['line']);
        }
        if (isset($map['log_reduce'])) {
            $model->logReduce = $map['log_reduce'];
        }
        if (isset($map['log_reduce_black_list'])) {
            if (!empty($map['log_reduce_black_list'])) {
                $model->logReduceBlackList = $map['log_reduce_black_list'];
            }
        }
        if (isset($map['log_reduce_white_list'])) {
            if (!empty($map['log_reduce_white_list'])) {
                $model->logReduceWhiteList = $map['log_reduce_white_list'];
            }
        }
        if (isset($map['max_text_len'])) {
            $model->maxTextLen = $map['max_text_len'];
        }
        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }
        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
