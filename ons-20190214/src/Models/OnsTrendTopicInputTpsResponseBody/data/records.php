<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody\data\records\statsDataDo;

class records extends Model
{
    /**
     * @var statsDataDo[]
     */
    public $statsDataDo;
    protected $_name = [
        'statsDataDo' => 'StatsDataDo',
    ];

    public function validate()
    {
        if (\is_array($this->statsDataDo)) {
            Model::validateArray($this->statsDataDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statsDataDo) {
            if (\is_array($this->statsDataDo)) {
                $res['StatsDataDo'] = [];
                $n1 = 0;
                foreach ($this->statsDataDo as $item1) {
                    $res['StatsDataDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StatsDataDo'])) {
            if (!empty($map['StatsDataDo'])) {
                $model->statsDataDo = [];
                $n1 = 0;
                foreach ($map['StatsDataDo'] as $item1) {
                    $model->statsDataDo[$n1] = statsDataDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
