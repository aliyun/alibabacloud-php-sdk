<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponseBody\data\choices;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetSummaryTaskResultResponseBody\data\usage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var choices[]
     */
    public $choices;

    /**
     * @example 1726285125915
     *
     * @var int
     */
    public $created;

    /**
     * @example 1202
     *
     * @var string
     */
    public $id;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 0bc13a9517168617617186457e401f
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2024-04-24 11:54:34
     *
     * @var string
     */
    public $time;

    /**
     * @example 300
     *
     * @var int
     */
    public $totalTokens;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'choices'     => 'choices',
        'created'     => 'created',
        'id'          => 'id',
        'modelId'     => 'modelId',
        'requestId'   => 'requestId',
        'time'        => 'time',
        'totalTokens' => 'totalTokens',
        'usage'       => 'usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->choices) {
            $res['choices'] = [];
            if (null !== $this->choices && \is_array($this->choices)) {
                $n = 0;
                foreach ($this->choices as $item) {
                    $res['choices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['choices'])) {
            if (!empty($map['choices'])) {
                $model->choices = [];
                $n              = 0;
                foreach ($map['choices'] as $item) {
                    $model->choices[$n++] = null !== $item ? choices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
