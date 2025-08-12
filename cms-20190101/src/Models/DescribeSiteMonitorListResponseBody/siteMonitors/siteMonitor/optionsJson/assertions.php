<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors\siteMonitor\optionsJson;

use AlibabaCloud\Dara\Model;

class assertions extends Model
{
    /**
     * @var assertions\assertions[]
     */
    public $assertions;
    protected $_name = [
        'assertions' => 'assertions',
    ];

    public function validate()
    {
        if (\is_array($this->assertions)) {
            Model::validateArray($this->assertions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assertions) {
            if (\is_array($this->assertions)) {
                $res['assertions'] = [];
                $n1 = 0;
                foreach ($this->assertions as $item1) {
                    $res['assertions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['assertions'])) {
            if (!empty($map['assertions'])) {
                $model->assertions = [];
                $n1 = 0;
                foreach ($map['assertions'] as $item1) {
                    $model->assertions[$n1] = assertions\assertions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
