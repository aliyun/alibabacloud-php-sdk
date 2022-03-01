<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\CreateSegmentBodyJobRequest\dataList;
use AlibabaCloud\Tea\Model;

class CreateSegmentBodyJobRequest extends Model
{
    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $timeToLive;
    protected $_name = [
        'dataList'   => 'DataList',
        'jobId'      => 'JobId',
        'timeToLive' => 'TimeToLive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataList) {
            $res['DataList'] = [];
            if (null !== $this->dataList && \is_array($this->dataList)) {
                $n = 0;
                foreach ($this->dataList as $item) {
                    $res['DataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->timeToLive) {
            $res['TimeToLive'] = $this->timeToLive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSegmentBodyJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n               = 0;
                foreach ($map['DataList'] as $item) {
                    $model->dataList[$n++] = null !== $item ? dataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['TimeToLive'])) {
            $model->timeToLive = $map['TimeToLive'];
        }

        return $model;
    }
}
