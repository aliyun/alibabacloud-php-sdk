<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\Index\line;

class Index extends Model
{
    /**
     * @var IndexKey[]
     */
    public $keys;

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
    protected $_name = [
        'keys' => 'keys',
        'line' => 'line',
        'logReduce' => 'log_reduce',
        'logReduceBlackList' => 'log_reduce_black_list',
        'logReduceWhiteList' => 'log_reduce_white_list',
        'maxTextLen' => 'max_text_len',
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
        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['keys'] = [];
                foreach ($this->keys as $key1 => $value1) {
                    $res['keys'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
                    $res['log_reduce_black_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->logReduceWhiteList) {
            if (\is_array($this->logReduceWhiteList)) {
                $res['log_reduce_white_list'] = [];
                $n1 = 0;
                foreach ($this->logReduceWhiteList as $item1) {
                    $res['log_reduce_white_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxTextLen) {
            $res['max_text_len'] = $this->maxTextLen;
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
        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = [];
                foreach ($map['keys'] as $key1 => $value1) {
                    $model->keys[$key1] = IndexKey::fromMap($value1);
                }
            }
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
                    $model->logReduceBlackList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['log_reduce_white_list'])) {
            if (!empty($map['log_reduce_white_list'])) {
                $model->logReduceWhiteList = [];
                $n1 = 0;
                foreach ($map['log_reduce_white_list'] as $item1) {
                    $model->logReduceWhiteList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['max_text_len'])) {
            $model->maxTextLen = $map['max_text_len'];
        }

        return $model;
    }
}
