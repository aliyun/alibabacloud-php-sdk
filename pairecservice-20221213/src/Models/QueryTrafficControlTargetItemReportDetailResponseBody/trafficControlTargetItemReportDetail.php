<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailResponseBody\trafficControlTargetItemReportDetail\itemControlTailReportDetails;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTargetItemReportDetailResponseBody\trafficControlTargetItemReportDetail\itemControlTopReportDetails;

class trafficControlTargetItemReportDetail extends Model
{
    /**
     * @var itemControlTailReportDetails[]
     */
    public $itemControlTailReportDetails;

    /**
     * @var itemControlTopReportDetails[]
     */
    public $itemControlTopReportDetails;
    protected $_name = [
        'itemControlTailReportDetails' => 'ItemControlTailReportDetails',
        'itemControlTopReportDetails' => 'ItemControlTopReportDetails',
    ];

    public function validate()
    {
        if (\is_array($this->itemControlTailReportDetails)) {
            Model::validateArray($this->itemControlTailReportDetails);
        }
        if (\is_array($this->itemControlTopReportDetails)) {
            Model::validateArray($this->itemControlTopReportDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemControlTailReportDetails) {
            if (\is_array($this->itemControlTailReportDetails)) {
                $res['ItemControlTailReportDetails'] = [];
                $n1 = 0;
                foreach ($this->itemControlTailReportDetails as $item1) {
                    $res['ItemControlTailReportDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemControlTopReportDetails) {
            if (\is_array($this->itemControlTopReportDetails)) {
                $res['ItemControlTopReportDetails'] = [];
                $n1 = 0;
                foreach ($this->itemControlTopReportDetails as $item1) {
                    $res['ItemControlTopReportDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ItemControlTailReportDetails'])) {
            if (!empty($map['ItemControlTailReportDetails'])) {
                $model->itemControlTailReportDetails = [];
                $n1 = 0;
                foreach ($map['ItemControlTailReportDetails'] as $item1) {
                    $model->itemControlTailReportDetails[$n1] = itemControlTailReportDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemControlTopReportDetails'])) {
            if (!empty($map['ItemControlTopReportDetails'])) {
                $model->itemControlTopReportDetails = [];
                $n1 = 0;
                foreach ($map['ItemControlTopReportDetails'] as $item1) {
                    $model->itemControlTopReportDetails[$n1] = itemControlTopReportDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
