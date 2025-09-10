<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\GetIndexResponseBody\line;

class GetIndexResponseBody extends Model
{
    /**
     * @var string
     */
    public $indexMode;

    /**
     * @var IndexKey[]
     */
    public $keys;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var line
     */
    public $line;

    /**
     * @var bool
     */
    public $logReduce;

    /**
     * @var string[]
     */
    public $logReduceBlackList;

    /**
     * @var string[]
     */
    public $logReduceWhiteList;

    /**
     * @var int
     */
    public $maxTextLen;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'indexMode' => 'index_mode',
        'keys' => 'keys',
        'lastModifyTime' => 'lastModifyTime',
        'line' => 'line',
        'logReduce' => 'log_reduce',
        'logReduceBlackList' => 'log_reduce_black_list',
        'logReduceWhiteList' => 'log_reduce_white_list',
        'maxTextLen' => 'max_text_len',
        'storage' => 'storage',
        'ttl' => 'ttl',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        if (null !== $this->line) {
            $this->line->validate();
        }
        if (\is_array($this->logReduceBlackList)) {
            Model::validateArray($this->logReduceBlackList);
        }
        if (\is_array($this->logReduceWhiteList)) {
            Model::validateArray($this->logReduceWhiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexMode) {
            $res['index_mode'] = $this->indexMode;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['keys'] = [];
                foreach ($this->keys as $key1 => $value1) {
                    $res['keys'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->line) {
            $res['line'] = null !== $this->line ? $this->line->toArray($noStream) : $this->line;
        }

        if (null !== $this->logReduce) {
            $res['log_reduce'] = $this->logReduce;
        }

        if (null !== $this->logReduceBlackList) {
            if (\is_array($this->logReduceBlackList)) {
                $res['log_reduce_black_list'] = [];
                $n1 = 0;
                foreach ($this->logReduceBlackList as $item1) {
                    $res['log_reduce_black_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->logReduceWhiteList) {
            if (\is_array($this->logReduceWhiteList)) {
                $res['log_reduce_white_list'] = [];
                $n1 = 0;
                foreach ($this->logReduceWhiteList as $item1) {
                    $res['log_reduce_white_list'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['index_mode'])) {
            $model->indexMode = $map['index_mode'];
        }

        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = [];
                foreach ($map['keys'] as $key1 => $value1) {
                    $model->keys[$key1] = IndexKey::fromMap($value1);
                }
            }
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
                $model->logReduceBlackList = [];
                $n1 = 0;
                foreach ($map['log_reduce_black_list'] as $item1) {
                    $model->logReduceBlackList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['log_reduce_white_list'])) {
            if (!empty($map['log_reduce_white_list'])) {
                $model->logReduceWhiteList = [];
                $n1 = 0;
                foreach ($map['log_reduce_white_list'] as $item1) {
                    $model->logReduceWhiteList[$n1] = $item1;
                    ++$n1;
                }
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
