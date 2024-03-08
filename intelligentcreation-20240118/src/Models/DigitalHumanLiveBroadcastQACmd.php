<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240118\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240118\Models\DigitalHumanLiveBroadcastQACmd\history;
use AlibabaCloud\Tea\Model;

class DigitalHumanLiveBroadcastQACmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var history[]
     */
    public $history;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var string
     */
    public $subAccountId;
    protected $_name = [
        'accountId'    => 'accountId',
        'history'      => 'history',
        'question'     => 'question',
        'sessionId'    => 'sessionId',
        'stream'       => 'stream',
        'subAccountId' => 'subAccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->history) {
            $res['history'] = [];
            if (null !== $this->history && \is_array($this->history)) {
                $n = 0;
                foreach ($this->history as $item) {
                    $res['history'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->question) {
            $res['question'] = $this->question;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }
        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DigitalHumanLiveBroadcastQACmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n              = 0;
                foreach ($map['history'] as $item) {
                    $model->history[$n++] = null !== $item ? history::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['question'])) {
            $model->question = $map['question'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }
        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        return $model;
    }
}
