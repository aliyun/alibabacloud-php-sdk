<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class RespondAgentConversationActionResponseBody extends Model
{
    /**
     * @var bool
     */
    public $accepted;

    /**
     * @var bool
     */
    public $continuationCreated;

    /**
     * @var string
     */
    public $runId;
    protected $_name = [
        'accepted' => 'accepted',
        'continuationCreated' => 'continuationCreated',
        'runId' => 'runId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accepted) {
            $res['accepted'] = $this->accepted;
        }

        if (null !== $this->continuationCreated) {
            $res['continuationCreated'] = $this->continuationCreated;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
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
        if (isset($map['accepted'])) {
            $model->accepted = $map['accepted'];
        }

        if (isset($map['continuationCreated'])) {
            $model->continuationCreated = $map['continuationCreated'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        return $model;
    }
}
