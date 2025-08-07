<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec\retryPolicy\exitCodeActions;

class retryPolicy extends Model
{
    /**
     * @var exitCodeActions[]
     */
    public $exitCodeActions;

    /**
     * @var int
     */
    public $retryCount;
    protected $_name = [
        'exitCodeActions' => 'ExitCodeActions',
        'retryCount' => 'RetryCount',
    ];

    public function validate()
    {
        if (\is_array($this->exitCodeActions)) {
            Model::validateArray($this->exitCodeActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exitCodeActions) {
            if (\is_array($this->exitCodeActions)) {
                $res['ExitCodeActions'] = [];
                $n1 = 0;
                foreach ($this->exitCodeActions as $item1) {
                    $res['ExitCodeActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
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
        if (isset($map['ExitCodeActions'])) {
            if (!empty($map['ExitCodeActions'])) {
                $model->exitCodeActions = [];
                $n1 = 0;
                foreach ($map['ExitCodeActions'] as $item1) {
                    $model->exitCodeActions[$n1] = exitCodeActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        return $model;
    }
}
