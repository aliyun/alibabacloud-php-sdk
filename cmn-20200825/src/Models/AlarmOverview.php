<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\AlarmOverview\conditionList;
use AlibabaCloud\Tea\Model;

class AlarmOverview extends Model
{
    /**
     * @example ao-cd9qef1w3dfv
     *
     * @var string
     */
    public $alarmOverviewId;

    /**
     * @example Example Name
     *
     * @var string
     */
    public $alarmOverviewName;

    /**
     * @var conditionList[]
     */
    public $conditionList;

    /**
     * @example 0
     *
     * @var int
     */
    public $serialNumber;
    protected $_name = [
        'alarmOverviewId'   => 'AlarmOverviewId',
        'alarmOverviewName' => 'AlarmOverviewName',
        'conditionList'     => 'ConditionList',
        'serialNumber'      => 'SerialNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmOverviewId) {
            $res['AlarmOverviewId'] = $this->alarmOverviewId;
        }
        if (null !== $this->alarmOverviewName) {
            $res['AlarmOverviewName'] = $this->alarmOverviewName;
        }
        if (null !== $this->conditionList) {
            $res['ConditionList'] = [];
            if (null !== $this->conditionList && \is_array($this->conditionList)) {
                $n = 0;
                foreach ($this->conditionList as $item) {
                    $res['ConditionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlarmOverview
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmOverviewId'])) {
            $model->alarmOverviewId = $map['AlarmOverviewId'];
        }
        if (isset($map['AlarmOverviewName'])) {
            $model->alarmOverviewName = $map['AlarmOverviewName'];
        }
        if (isset($map['ConditionList'])) {
            if (!empty($map['ConditionList'])) {
                $model->conditionList = [];
                $n                    = 0;
                foreach ($map['ConditionList'] as $item) {
                    $model->conditionList[$n++] = null !== $item ? conditionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
