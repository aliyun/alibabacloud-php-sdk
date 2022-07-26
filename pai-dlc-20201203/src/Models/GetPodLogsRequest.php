<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetPodLogsRequest extends Model
{
    /**
     * @var bool
     */
    public $downloadToFile;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxLines;

    /**
     * @var string
     */
    public $podUid;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'downloadToFile' => 'DownloadToFile',
        'endTime'        => 'EndTime',
        'maxLines'       => 'MaxLines',
        'podUid'         => 'PodUid',
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
        if (null !== $this->podUid) {
            $res['PodUid'] = $this->podUid;
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
        if (isset($map['PodUid'])) {
            $model->podUid = $map['PodUid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
