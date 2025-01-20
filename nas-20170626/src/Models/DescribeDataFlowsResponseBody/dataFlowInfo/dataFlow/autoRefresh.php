<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowsResponseBody\dataFlowInfo\dataFlow\autoRefresh\autoRefresh;

class autoRefresh extends Model
{
    /**
     * @var autoRefresh[]
     */
    public $autoRefresh;
    protected $_name = [
        'autoRefresh' => 'AutoRefresh',
    ];

    public function validate()
    {
        if (\is_array($this->autoRefresh)) {
            Model::validateArray($this->autoRefresh);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRefresh) {
            if (\is_array($this->autoRefresh)) {
                $res['AutoRefresh'] = [];
                $n1                 = 0;
                foreach ($this->autoRefresh as $item1) {
                    $res['AutoRefresh'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoRefresh'])) {
            if (!empty($map['AutoRefresh'])) {
                $model->autoRefresh = [];
                $n1                 = 0;
                foreach ($map['AutoRefresh'] as $item1) {
                    $model->autoRefresh[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
