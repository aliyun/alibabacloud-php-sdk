<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody\timeSeries;

use AlibabaCloud\Dara\Model;

class labels extends Model
{
    /**
     * @var string
     */
    public $k;

    /**
     * @var string
     */
    public $v;
    protected $_name = [
        'k' => 'K',
        'v' => 'V',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k) {
            $res['K'] = $this->k;
        }

        if (null !== $this->v) {
            $res['V'] = $this->v;
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
        if (isset($map['K'])) {
            $model->k = $map['K'];
        }

        if (isset($map['V'])) {
            $model->v = $map['V'];
        }

        return $model;
    }
}
