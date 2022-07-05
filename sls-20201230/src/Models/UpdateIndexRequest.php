<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexRequest\line;
use AlibabaCloud\Tea\Model;

class UpdateIndexRequest extends Model
{
    /**
     * @description 字段索引配置，key为字段名称，value为字段索引配置。
     *
     * @var KeysValue[]
     */
    public $keys;

    /**
     * @description 配置全文索引。
     *
     * @var line
     */
    public $line;

    /**
     * @description 开启日志聚类，开启后白名单与黑名单至多生效其中一个。
     *
     * @var bool
     */
    public $logReduce;

    /**
     * @description 日志聚类的聚类字段黑名单
     *
     * @var string[]
     */
    public $logReduceBlackList;

    /**
     * @description 日志聚类的聚类字段白名单
     *
     * @var string[]
     */
    public $logReduceWhiteList;

    /**
     * @description 统计字段的最大长度
     *
     * @var int
     */
    public $maxTextLen;

    /**
     * @description 保存时间，单位为天
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'keys'               => 'keys',
        'line'               => 'line',
        'logReduce'          => 'log_reduce',
        'logReduceBlackList' => 'log_reduce_black_list',
        'logReduceWhiteList' => 'log_reduce_white_list',
        'maxTextLen'         => 'max_text_len',
        'ttl'                => 'ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keys) {
            $res['keys'] = [];
            if (null !== $this->keys && \is_array($this->keys)) {
                foreach ($this->keys as $key => $val) {
                    $res['keys'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
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
        if (null !== $this->ttl) {
            $res['ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keys'])) {
            $model->keys = $map['keys'];
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
        if (isset($map['ttl'])) {
            $model->ttl = $map['ttl'];
        }

        return $model;
    }
}
