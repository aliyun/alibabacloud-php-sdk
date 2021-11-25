<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetPodLogsRequest extends Model
{
    /**
     * @description 是否下载日志文件，默认：false。
     *
     * @var bool
     */
    public $downloadToFile;

    /**
     * @description 查询的截止时间，默认值：当前。
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 返回的日志的最大行数，默认值：2000。
     *
     * @var int
     */
    public $maxLines;

    /**
     * @description 查询的起始时间，默认值：7天前。
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'downloadToFile' => 'DownloadToFile',
        'endTime'        => 'EndTime',
        'maxLines'       => 'MaxLines',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadToFile) {
            $res['DownloadToFile'] = $this->downloadToFile;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxLines) {
            $res['MaxLines'] = $this->maxLines;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPodLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadToFile'])) {
            $model->downloadToFile = $map['DownloadToFile'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxLines'])) {
            $model->maxLines = $map['MaxLines'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
