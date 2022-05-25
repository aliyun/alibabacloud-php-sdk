<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\prometheus\annotations;
use AlibabaCloud\Tea\Model;

class prometheus extends Model
{
    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $promQL;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'annotations' => 'Annotations',
        'level'       => 'Level',
        'promQL'      => 'PromQL',
        'times'       => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                $n = 0;
                foreach ($this->annotations as $item) {
                    $res['Annotations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->promQL) {
            $res['PromQL'] = $this->promQL;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prometheus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['Annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? annotations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PromQL'])) {
            $model->promQL = $map['PromQL'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
