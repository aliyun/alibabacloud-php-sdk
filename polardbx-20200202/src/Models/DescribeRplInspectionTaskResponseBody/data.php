<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRplInspectionTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRplInspectionTaskResponseBody\data\inspectionTaskList;

class data extends Model
{
    /**
     * @var inspectionTaskList[]
     */
    public $inspectionTaskList;

    /**
     * @var string
     */
    public $slinkStage;
    protected $_name = [
        'inspectionTaskList' => 'InspectionTaskList',
        'slinkStage' => 'SlinkStage',
    ];

    public function validate()
    {
        if (\is_array($this->inspectionTaskList)) {
            Model::validateArray($this->inspectionTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inspectionTaskList) {
            if (\is_array($this->inspectionTaskList)) {
                $res['InspectionTaskList'] = [];
                $n1 = 0;
                foreach ($this->inspectionTaskList as $item1) {
                    $res['InspectionTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->slinkStage) {
            $res['SlinkStage'] = $this->slinkStage;
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
        if (isset($map['InspectionTaskList'])) {
            if (!empty($map['InspectionTaskList'])) {
                $model->inspectionTaskList = [];
                $n1 = 0;
                foreach ($map['InspectionTaskList'] as $item1) {
                    $model->inspectionTaskList[$n1] = inspectionTaskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SlinkStage'])) {
            $model->slinkStage = $map['SlinkStage'];
        }

        return $model;
    }
}
