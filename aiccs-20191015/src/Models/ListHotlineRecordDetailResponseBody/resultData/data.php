<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListHotlineRecordDetailResponseBody\resultData;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $servicerName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'ossUrl' => 'OssUrl',
        'servicerName' => 'ServicerName',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
