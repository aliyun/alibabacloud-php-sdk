<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssAgent\V20260622\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OssAgent\V20260622\Models\ConfirmRequest\toolCalls;

class ConfirmRequest extends Model
{
    /**
     * @var bool
     */
    public $confirmed;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var toolCalls[]
     */
    public $toolCalls;
    protected $_name = [
        'confirmed' => 'confirmed',
        'phase' => 'phase',
        'reason' => 'reason',
        'sessionId' => 'sessionId',
        'toolCalls' => 'toolCalls',
    ];

    public function validate()
    {
        if (\is_array($this->toolCalls)) {
            Model::validateArray($this->toolCalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confirmed) {
            $res['confirmed'] = $this->confirmed;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->toolCalls) {
            if (\is_array($this->toolCalls)) {
                $res['toolCalls'] = [];
                $n1 = 0;
                foreach ($this->toolCalls as $item1) {
                    $res['toolCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['confirmed'])) {
            $model->confirmed = $map['confirmed'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['toolCalls'])) {
            if (!empty($map['toolCalls'])) {
                $model->toolCalls = [];
                $n1 = 0;
                foreach ($map['toolCalls'] as $item1) {
                    $model->toolCalls[$n1] = toolCalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
