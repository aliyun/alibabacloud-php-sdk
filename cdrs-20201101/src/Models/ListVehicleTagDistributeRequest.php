<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListVehicleTagDistributeRequest extends Model
{
    /**
     * @example 2286049969284580096
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 2021-01-21 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2021-01-20 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example vehicleUsefulDistribute
     *
     * @var string
     */
    public $tagCode;
    protected $_name = [
        'corpId'    => 'CorpId',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'tagCode'   => 'TagCode',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tagCode) {
            $res['TagCode'] = $this->tagCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVehicleTagDistributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TagCode'])) {
            $model->tagCode = $map['TagCode'];
        }

        return $model;
    }
}
