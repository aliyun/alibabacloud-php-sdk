<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribePreCheckProgressListResponseBody\items\preCheckProgressDetail;

class items extends Model
{
    /**
     * @var preCheckProgressDetail[]
     */
    public $preCheckProgressDetail;
    protected $_name = [
        'preCheckProgressDetail' => 'PreCheckProgressDetail',
    ];

    public function validate()
    {
        if (\is_array($this->preCheckProgressDetail)) {
            Model::validateArray($this->preCheckProgressDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preCheckProgressDetail) {
            if (\is_array($this->preCheckProgressDetail)) {
                $res['PreCheckProgressDetail'] = [];
                $n1 = 0;
                foreach ($this->preCheckProgressDetail as $item1) {
                    $res['PreCheckProgressDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PreCheckProgressDetail'])) {
            if (!empty($map['PreCheckProgressDetail'])) {
                $model->preCheckProgressDetail = [];
                $n1 = 0;
                foreach ($map['PreCheckProgressDetail'] as $item1) {
                    $model->preCheckProgressDetail[$n1] = preCheckProgressDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
