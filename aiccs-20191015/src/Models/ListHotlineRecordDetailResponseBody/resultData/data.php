<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordDetailResponseBody\resultData;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1614578410000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example http://xxx.xxxxx/xx.wav
     *
     * @var string
     */
    public $ossUrl;

    /**
     * @example 123@123.com
     *
     * @var string
     */
    public $servicerName;

    /**
     * @example 1614578400000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'ossUrl'       => 'OssUrl',
        'servicerName' => 'ServicerName',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }
        if (null !== $this->servicerName) {
            $res['ServicerName'] = $this->servicerName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }
        if (isset($map['ServicerName'])) {
            $model->servicerName = $map['ServicerName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
