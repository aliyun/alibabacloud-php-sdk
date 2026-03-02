<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Neuron\V20211115\Models\TraceInfoDetailResult\traceDetails;

class TraceInfoDetailResult extends Model
{
    /**
     * @var traceDetails[]
     */
    public $traceDetails;
    protected $_name = [
        'traceDetails' => 'traceDetails',
    ];

    public function validate()
    {
        if (\is_array($this->traceDetails)) {
            Model::validateArray($this->traceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->traceDetails) {
            if (\is_array($this->traceDetails)) {
                $res['traceDetails'] = [];
                $n1 = 0;
                foreach ($this->traceDetails as $item1) {
                    $res['traceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['traceDetails'])) {
            if (!empty($map['traceDetails'])) {
                $model->traceDetails = [];
                $n1 = 0;
                foreach ($map['traceDetails'] as $item1) {
                    $model->traceDetails[$n1] = traceDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
