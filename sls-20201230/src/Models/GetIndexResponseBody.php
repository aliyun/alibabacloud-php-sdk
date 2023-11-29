<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponseBody\line;
use AlibabaCloud\Tea\Model;

class GetIndexResponseBody extends Model
{
    /**
     * @description The type of the index.
     *
     * @example v2
     *
     * @var string
     */
    public $indexMode;

    /**
     * @description The configurations of field indexes. A field index is in the key-value format in which the key specifies the name of the field and the value specifies the index configuration of the field.
     *
     * @var KeysValue[]
     */
    public $keys;

    /**
     * @description The time when the index configurations were last updated. The value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1524155379
     *
     * @var int
     */
    public $lastModifyTime;

    /**
     * @description The configurations of full-text indexes.
     *
     * @var line
     */
    public $line;

    /**
     * @description Indicates whether the log clustering feature is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $logReduce;

    /**
     * @description The fields in the blacklist that are used to cluster logs. This parameter is valid only if the log clustering feature is enabled.
     *
     * @var string[]
     */
    public $logReduceBlackList;

    /**
     * @description The fields in the whitelist that are used to cluster logs. This parameter is valid only if the log clustering feature is enabled.
     *
     * @var string[]
     */
    public $logReduceWhiteList;

    /**
     * @description The maximum length of a field value that can be retained. Default value: 2048. Unit: bytes. The default value is equal to 2 KB. You can change the value of the max_text_len parameter. Valid values: 64 to 16384. Unit: bytes.
     *
     * @example 2048
     *
     * @var int
     */
    public $maxTextLen;

    /**
     * @description The storage type. The value is fixed as pg.
     *
     * @example pg
     *
     * @var string
     */
    public $storage;

    /**
     * @description The lifecycle of the index file. Valid values: 7, 30, and 90. Unit: day.
     *
     * @example 30
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
