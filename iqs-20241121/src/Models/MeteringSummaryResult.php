<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20241121\Models\MeteringSummaryResult\meteringSummaryList;

class MeteringSummaryResult extends Model
{
    /**
     * @var meteringSummaryList[]
     */
    public $meteringSummaryList;
    protected $_name = [
        'meteringSummaryList' => 'meteringSummaryList',
    ];

    public function validate()
    {
        if (\is_array($this->meteringSummaryList)) {
            Model::validateArray($this->meteringSummaryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meteringSummaryList) {
            if (\is_array($this->meteringSummaryList)) {
                $res['meteringSummaryList'] = [];
                $n1 = 0;
                foreach ($this->meteringSummaryList as $item1) {
                    $res['meteringSummaryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['meteringSummaryList'])) {
            if (!empty($map['meteringSummaryList'])) {
                $model->meteringSummaryList = [];
                $n1 = 0;
                foreach ($map['meteringSummaryList'] as $item1) {
                    $model->meteringSummaryList[$n1] = meteringSummaryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
