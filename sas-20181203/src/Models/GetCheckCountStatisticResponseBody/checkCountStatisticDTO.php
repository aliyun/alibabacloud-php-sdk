<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckCountStatisticResponseBody\checkCountStatisticDTO\checkCountStatisticItems;

class checkCountStatisticDTO extends Model
{
    /**
     * @var checkCountStatisticItems[]
     */
    public $checkCountStatisticItems;
    /**
     * @var string
     */
    public $statisticType;
    protected $_name = [
        'checkCountStatisticItems' => 'CheckCountStatisticItems',
        'statisticType'            => 'StatisticType',
    ];

    public function validate()
    {
        if (\is_array($this->checkCountStatisticItems)) {
            Model::validateArray($this->checkCountStatisticItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkCountStatisticItems) {
            if (\is_array($this->checkCountStatisticItems)) {
                $res['CheckCountStatisticItems'] = [];
                $n1                              = 0;
                foreach ($this->checkCountStatisticItems as $item1) {
                    $res['CheckCountStatisticItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->statisticType) {
            $res['StatisticType'] = $this->statisticType;
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
        if (isset($map['CheckCountStatisticItems'])) {
            if (!empty($map['CheckCountStatisticItems'])) {
                $model->checkCountStatisticItems = [];
                $n1                              = 0;
                foreach ($map['CheckCountStatisticItems'] as $item1) {
                    $model->checkCountStatisticItems[$n1++] = checkCountStatisticItems::fromMap($item1);
                }
            }
        }

        if (isset($map['StatisticType'])) {
            $model->statisticType = $map['StatisticType'];
        }

        return $model;
    }
}
