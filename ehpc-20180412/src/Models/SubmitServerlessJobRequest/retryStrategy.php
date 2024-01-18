<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\retryStrategy\evaluateOnExit;
use AlibabaCloud\Tea\Model;

class retryStrategy extends Model
{
    /**
     * @description The number of retries for the serverless job. Valid values: 1 to 10.
     *
     * @example 5
     *
     * @var int
     */
    public $attempts;

    /**
     * @description The list of retry rules for the serverless job. You can specify up to 10 rules.
     *
     * @var evaluateOnExit[]
     */
    public $evaluateOnExit;
    protected $_name = [
        'attempts'       => 'Attempts',
        'evaluateOnExit' => 'EvaluateOnExit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }
        if (null !== $this->evaluateOnExit) {
            $res['EvaluateOnExit'] = [];
            if (null !== $this->evaluateOnExit && \is_array($this->evaluateOnExit)) {
                $n = 0;
                foreach ($this->evaluateOnExit as $item) {
                    $res['EvaluateOnExit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retryStrategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }
        if (isset($map['EvaluateOnExit'])) {
            if (!empty($map['EvaluateOnExit'])) {
                $model->evaluateOnExit = [];
                $n                     = 0;
                foreach ($map['EvaluateOnExit'] as $item) {
                    $model->evaluateOnExit[$n++] = null !== $item ? evaluateOnExit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
