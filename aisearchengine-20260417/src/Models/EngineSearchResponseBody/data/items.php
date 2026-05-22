<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var mixed[]
     */
    public $algorithm;

    /**
     * @var mixed[]
     */
    public $content;

    /**
     * @var string
     */
    public $id;

    /**
     * @var float
     */
    public $score;

    /**
     * @var mixed[]
     */
    public $traceInfo;
    protected $_name = [
        'algorithm' => 'algorithm',
        'content' => 'content',
        'id' => 'id',
        'score' => 'score',
        'traceInfo' => 'traceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->algorithm)) {
            Model::validateArray($this->algorithm);
        }
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->traceInfo)) {
            Model::validateArray($this->traceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithm) {
            if (\is_array($this->algorithm)) {
                $res['algorithm'] = [];
                foreach ($this->algorithm as $key1 => $value1) {
                    $res['algorithm'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                foreach ($this->content as $key1 => $value1) {
                    $res['content'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->traceInfo) {
            if (\is_array($this->traceInfo)) {
                $res['traceInfo'] = [];
                foreach ($this->traceInfo as $key1 => $value1) {
                    $res['traceInfo'][$key1] = $value1;
                }
            }
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
        if (isset($map['algorithm'])) {
            if (!empty($map['algorithm'])) {
                $model->algorithm = [];
                foreach ($map['algorithm'] as $key1 => $value1) {
                    $model->algorithm[$key1] = $value1;
                }
            }
        }

        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                foreach ($map['content'] as $key1 => $value1) {
                    $model->content[$key1] = $value1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['traceInfo'])) {
            if (!empty($map['traceInfo'])) {
                $model->traceInfo = [];
                foreach ($map['traceInfo'] as $key1 => $value1) {
                    $model->traceInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
