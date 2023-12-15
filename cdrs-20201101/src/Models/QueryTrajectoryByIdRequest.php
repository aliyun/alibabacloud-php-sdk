<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\SDK\CDRS\V20201101\Models\QueryTrajectoryByIdRequest\deviceList;
use AlibabaCloud\SDK\CDRS\V20201101\Models\QueryTrajectoryByIdRequest\idList;
use AlibabaCloud\Tea\Model;

class QueryTrajectoryByIdRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var deviceList[]
     */
    public $deviceList;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var idList[]
     */
    public $idList;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'corpId'     => 'CorpId',
        'deviceList' => 'DeviceList',
        'endTime'    => 'EndTime',
        'idList'     => 'IdList',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->deviceList) {
            $res['DeviceList'] = [];
            if (null !== $this->deviceList && \is_array($this->deviceList)) {
                $n = 0;
                foreach ($this->deviceList as $item) {
                    $res['DeviceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->idList) {
            $res['IdList'] = [];
            if (null !== $this->idList && \is_array($this->idList)) {
                $n = 0;
                foreach ($this->idList as $item) {
                    $res['IdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrajectoryByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DeviceList'])) {
            if (!empty($map['DeviceList'])) {
                $model->deviceList = [];
                $n                 = 0;
                foreach ($map['DeviceList'] as $item) {
                    $model->deviceList[$n++] = null !== $item ? deviceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n             = 0;
                foreach ($map['IdList'] as $item) {
                    $model->idList[$n++] = null !== $item ? idList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
