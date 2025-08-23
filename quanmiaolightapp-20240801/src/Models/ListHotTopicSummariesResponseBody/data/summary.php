<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\summary\summaries;

class summary extends Model
{
    /**
     * @var summaries[]
     */
    public $summaries;
    protected $_name = [
        'summaries' => 'summaries',
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
        if (null !== $this->summaries) {
            if (\is_array($this->summaries)) {
                $res['summaries'] = [];
                $n1 = 0;
                foreach ($this->summaries as $item1) {
                    $res['summaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['summaries'])) {
            if (!empty($map['summaries'])) {
                $model->summaries = [];
                $n1 = 0;
                foreach ($map['summaries'] as $item1) {
                    $model->summaries[$n1] = summaries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
