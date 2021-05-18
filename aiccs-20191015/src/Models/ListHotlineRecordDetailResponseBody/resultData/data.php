<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordDetailResponseBody\resultData;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $servicerName;

    /**
     * @description 热线开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 热线结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 热线通话录音地址
     *
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'servicerName' => 'ServicerName',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'ossUrl'       => 'OssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
