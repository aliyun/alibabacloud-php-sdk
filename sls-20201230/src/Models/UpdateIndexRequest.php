<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\UpdateIndexRequest\line;
use AlibabaCloud\Tea\Model;

class UpdateIndexRequest extends Model
{
    /**
     * @description The configuration of field indexes. A field index is a key-value pair in which the key specifies the name of the field and the value specifies the index configuration of the field.
     *
     * @var KeysValue[]
     */
    public $keys;

    /**
     * @description The configuration of full-text indexes.
     *
     * @var line
     */
    public $line;

    /**
     * @description Specifies whether to turn on LogReduce. If you turn on LogReduce, only one of `log_reduce_white_list` and `log_reduce_black_list` takes effect.
     *
     * @example false
     *
     * @var bool
     */
    public $logReduce;

    /**
     * @description The fields in the blacklist that you want to use to cluster logs.
     *
     * @var string[]
     */
    public $logReduceBlackList;

    /**
     * @description The fields in the whitelist that you want to use to cluster logs.
     *
     * @var string[]
     */
    public $logReduceWhiteList;

    /**
     * @description The maximum length of a field value that can be retained.
     *
     * @example 2048
     *
     * @var int
     */
    public $maxTextLen;

    /**
     * @description The retention period of data. Unit: days. Valid values: 7, 30, and 90.
     *
     * This parameter is required.
     * @example 30
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
