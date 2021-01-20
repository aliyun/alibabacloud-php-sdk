<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList\alert;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alert) {
            $res['Alert'] = [];
            if (null !== $this->alert && \is_array($this->alert)) {
                $n = 0;
                foreach ($this->alert as $item) {
                    $res['Alert'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alert'])) {
            if (!empty($map['Alert'])) {
                $model->alert = [];
                $n            = 0;
                foreach ($map['Alert'] as $item) {
                    $model->alert[$n++] = null !== $item ? alert::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
