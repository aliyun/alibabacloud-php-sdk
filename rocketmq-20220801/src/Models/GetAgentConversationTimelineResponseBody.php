<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class GetAgentConversationTimelineResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $items;

    /**
     * @var int
     */
    public $replayCursor;

    /**
     * @var mixed
     */
    public $responseFeedback;

    /**
     * @var mixed
     */
    public $runs;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'items' => 'items',
        'replayCursor' => 'replayCursor',
        'responseFeedback' => 'responseFeedback',
        'runs' => 'runs',
        'source' => 'source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = $this->items;
        }

        if (null !== $this->replayCursor) {
            $res['replayCursor'] = $this->replayCursor;
        }

        if (null !== $this->responseFeedback) {
            $res['responseFeedback'] = $this->responseFeedback;
        }

        if (null !== $this->runs) {
            $res['runs'] = $this->runs;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['items'])) {
            $model->items = $map['items'];
        }

        if (isset($map['replayCursor'])) {
            $model->replayCursor = $map['replayCursor'];
        }

        if (isset($map['responseFeedback'])) {
            $model->responseFeedback = $map['responseFeedback'];
        }

        if (isset($map['runs'])) {
            $model->runs = $map['runs'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        return $model;
    }
}
