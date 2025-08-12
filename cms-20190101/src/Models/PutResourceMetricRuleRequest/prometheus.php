<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleRequest\prometheus\annotations;

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
        'level' => 'Level',
        'promQL' => 'PromQL',
        'times' => 'Times',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['Annotations'] = [];
                $n1 = 0;
                foreach ($this->annotations as $item1) {
                    $res['Annotations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n1 = 0;
                foreach ($map['Annotations'] as $item1) {
                    $model->annotations[$n1] = annotations::fromMap($item1);
                    ++$n1;
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
