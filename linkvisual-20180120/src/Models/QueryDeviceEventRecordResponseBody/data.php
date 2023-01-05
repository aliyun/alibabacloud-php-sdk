<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDeviceEventRecordResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2021-09-08 15:55:35
     *
     * @var string
     */
    public $beginTime;

    /**
     * @example 2021-09-08 15:56:32
     *
     * @var string
     */
    public $endTime;

    /**
     * @example file1
     *
     * @var string
     */
    public $fileName;

    /**
     * @example rtmp://****\/****.mp4
     *
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'beginTime' => 'BeginTime',
        'endTime'   => 'EndTime',
        'fileName'  => 'FileName',
        'vodUrl'    => 'VodUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->vodUrl) {
            $res['VodUrl'] = $this->vodUrl;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }

        return $model;
    }
}
