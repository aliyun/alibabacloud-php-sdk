<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

class steps extends Model
{
    /**
     * @var steps\steps[]
     */
    public $steps;
    protected $_name = [
        'steps' => 'steps',
    ];

    public function validate()
    {
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['steps'])) {
            if (!empty($map['steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['steps'] as $item1) {
                    $model->steps[$n1] = steps\steps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
