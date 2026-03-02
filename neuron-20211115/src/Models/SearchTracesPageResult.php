<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class SearchTracesPageResult extends Model
{
    /**
     * @var TraceInfo[]
     */
    public $traceInfos;
    protected $_name = [
        'traceInfos' => 'traceInfos',
    ];

    public function validate()
    {
        if (\is_array($this->traceInfos)) {
            Model::validateArray($this->traceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->traceInfos) {
            if (\is_array($this->traceInfos)) {
                $res['traceInfos'] = [];
                $n1 = 0;
                foreach ($this->traceInfos as $item1) {
                    $res['traceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['traceInfos'])) {
            if (!empty($map['traceInfos'])) {
                $model->traceInfos = [];
                $n1 = 0;
                foreach ($map['traceInfos'] as $item1) {
                    $model->traceInfos[$n1] = TraceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
