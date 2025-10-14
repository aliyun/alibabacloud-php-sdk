<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDataImportTaskInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDataImportTaskInfoResponseBody\data\dataImportTaskDetailInfo\serviceDetailList;

class dataImportTaskDetailInfo extends Model
{
    /**
     * @var int
     */
    public $fsmId;

    /**
     * @var string
     */
    public $fsmState;

    /**
     * @var string
     */
    public $fsmStatus;

    /**
     * @var serviceDetailList[]
     */
    public $serviceDetailList;
    protected $_name = [
        'fsmId' => 'FsmId',
        'fsmState' => 'FsmState',
        'fsmStatus' => 'FsmStatus',
        'serviceDetailList' => 'ServiceDetailList',
    ];

    public function validate()
    {
        if (\is_array($this->serviceDetailList)) {
            Model::validateArray($this->serviceDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fsmId) {
            $res['FsmId'] = $this->fsmId;
        }

        if (null !== $this->fsmState) {
            $res['FsmState'] = $this->fsmState;
        }

        if (null !== $this->fsmStatus) {
            $res['FsmStatus'] = $this->fsmStatus;
        }

        if (null !== $this->serviceDetailList) {
            if (\is_array($this->serviceDetailList)) {
                $res['ServiceDetailList'] = [];
                $n1 = 0;
                foreach ($this->serviceDetailList as $item1) {
                    $res['ServiceDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FsmId'])) {
            $model->fsmId = $map['FsmId'];
        }

        if (isset($map['FsmState'])) {
            $model->fsmState = $map['FsmState'];
        }

        if (isset($map['FsmStatus'])) {
            $model->fsmStatus = $map['FsmStatus'];
        }

        if (isset($map['ServiceDetailList'])) {
            if (!empty($map['ServiceDetailList'])) {
                $model->serviceDetailList = [];
                $n1 = 0;
                foreach ($map['ServiceDetailList'] as $item1) {
                    $model->serviceDetailList[$n1] = serviceDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
