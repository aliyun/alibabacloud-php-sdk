<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\summary\summaries;

class summary extends Model
{
    /**
     * @var int
     */
    public $inputToken;
    /**
     * @var int
     */
    public $outputToken;
    /**
     * @var summaries[]
     */
    public $summaries;
    protected $_name = [
        'inputToken'  => 'InputToken',
        'outputToken' => 'OutputToken',
        'summaries'   => 'Summaries',
    ];

    public function validate()
    {
        if (\is_array($this->summaries)) {
            Model::validateArray($this->summaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputToken) {
            $res['InputToken'] = $this->inputToken;
        }

        if (null !== $this->outputToken) {
            $res['OutputToken'] = $this->outputToken;
        }

        if (null !== $this->summaries) {
            if (\is_array($this->summaries)) {
                $res['Summaries'] = [];
                $n1               = 0;
                foreach ($this->summaries as $item1) {
                    $res['Summaries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InputToken'])) {
            $model->inputToken = $map['InputToken'];
        }

        if (isset($map['OutputToken'])) {
            $model->outputToken = $map['OutputToken'];
        }

        if (isset($map['Summaries'])) {
            if (!empty($map['Summaries'])) {
                $model->summaries = [];
                $n1               = 0;
                foreach ($map['Summaries'] as $item1) {
                    $model->summaries[$n1++] = summaries::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
