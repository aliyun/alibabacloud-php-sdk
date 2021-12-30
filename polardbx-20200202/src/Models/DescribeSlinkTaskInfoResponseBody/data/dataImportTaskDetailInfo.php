<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlinkTaskInfoResponseBody\data;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlinkTaskInfoResponseBody\data\dataImportTaskDetailInfo\serviceDetailList;
use AlibabaCloud\Tea\Model;

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
        'fsmId'             => 'FsmId',
        'fsmState'          => 'FsmState',
        'fsmStatus'         => 'FsmStatus',
        'serviceDetailList' => 'ServiceDetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ServiceDetailList'] = [];
            if (null !== $this->serviceDetailList && \is_array($this->serviceDetailList)) {
                $n = 0;
                foreach ($this->serviceDetailList as $item) {
                    $res['ServiceDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataImportTaskDetailInfo
     */
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
                $n                        = 0;
                foreach ($map['ServiceDetailList'] as $item) {
                    $model->serviceDetailList[$n++] = null !== $item ? serviceDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
