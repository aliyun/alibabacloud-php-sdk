<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus\annotations;

class prometheus extends Model
{
    /**
     * @var annotations
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
        if (null !== $this->annotations) {
            $this->annotations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = null !== $this->annotations ? $this->annotations->toArray($noStream) : $this->annotations;
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
            $model->annotations = annotations::fromMap($map['Annotations']);
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
