<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus;

use AlibabaCloud\Dara\Model;

class annotations extends Model
{
    /**
     * @var annotations\annotations[]
     */
    public $annotations;
    protected $_name = [
        'annotations' => 'Annotations',
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
                    $model->annotations[$n1] = annotations\annotations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
