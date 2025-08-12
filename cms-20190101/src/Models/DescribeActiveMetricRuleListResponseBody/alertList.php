<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList\alert;

class alertList extends Model
{
    /**
     * @var alert[]
     */
    public $alert;
    protected $_name = [
        'alert' => 'Alert',
    ];

    public function validate()
    {
        if (\is_array($this->alert)) {
            Model::validateArray($this->alert);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alert) {
            if (\is_array($this->alert)) {
                $res['Alert'] = [];
                $n1 = 0;
                foreach ($this->alert as $item1) {
                    $res['Alert'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Alert'])) {
            if (!empty($map['Alert'])) {
                $model->alert = [];
                $n1 = 0;
                foreach ($map['Alert'] as $item1) {
                    $model->alert[$n1] = alert::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
