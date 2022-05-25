<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus;

use AlibabaCloud\Tea\Model;

class annotations extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus\annotations\annotations[]
     */
    public $annotations;
    protected $_name = [
        'annotations' => 'Annotations',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n                  = 0;
                foreach ($map['Annotations'] as $item) {
                    $model->annotations[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus\annotations\annotations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
