<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\CreateQueueRequest;

use AlibabaCloud\Dara\Model;

class dlqPolicy extends Model
{
    /**
     * @var string
     */
    public $deadLetterTargetQueue;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $maxReceiveCount;
    protected $_name = [
        'deadLetterTargetQueue' => 'DeadLetterTargetQueue',
        'enabled' => 'Enabled',
        'maxReceiveCount' => 'MaxReceiveCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deadLetterTargetQueue) {
            $res['DeadLetterTargetQueue'] = $this->deadLetterTargetQueue;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->maxReceiveCount) {
            $res['MaxReceiveCount'] = $this->maxReceiveCount;
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
        if (isset($map['DeadLetterTargetQueue'])) {
            $model->deadLetterTargetQueue = $map['DeadLetterTargetQueue'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['MaxReceiveCount'])) {
            $model->maxReceiveCount = $map['MaxReceiveCount'];
        }

        return $model;
    }
}
