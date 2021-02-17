<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody\data;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTrendTopicInputTpsResponseBody\data\records\statsDataDo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statsDataDo) {
            $res['StatsDataDo'] = [];
            if (null !== $this->statsDataDo && \is_array($this->statsDataDo)) {
                $n = 0;
                foreach ($this->statsDataDo as $item) {
                    $res['StatsDataDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatsDataDo'])) {
            if (!empty($map['StatsDataDo'])) {
                $model->statsDataDo = [];
                $n                  = 0;
                foreach ($map['StatsDataDo'] as $item) {
                    $model->statsDataDo[$n++] = null !== $item ? statsDataDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
