<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\AutoScalingConstraints;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\Tag;

class supportMetricTags extends Model
{
    /**
     * @var string
     */
    public $metricName;
    /**
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'metricName' => 'MetricName',
        'tags'       => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
