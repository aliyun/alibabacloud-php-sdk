<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec\retryPolicy\exitCodeActions;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exitCodeActions) {
            $res['ExitCodeActions'] = [];
            if (null !== $this->exitCodeActions && \is_array($this->exitCodeActions)) {
                $n = 0;
                foreach ($this->exitCodeActions as $item) {
                    $res['ExitCodeActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExitCodeActions'])) {
            if (!empty($map['ExitCodeActions'])) {
                $model->exitCodeActions = [];
                $n = 0;
                foreach ($map['ExitCodeActions'] as $item) {
                    $model->exitCodeActions[$n++] = null !== $item ? exitCodeActions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }

        return $model;
    }
}
