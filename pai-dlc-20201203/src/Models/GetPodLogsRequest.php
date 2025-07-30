<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetPodLogsRequest extends Model
{
    /**
     * @description Specifies whether to download the log file. Default value: false. Valid values:
     *
     *   false
     *   true
     *
     * @example true
     *
     * @var bool
     */
    public $downloadToFile;

    /**
     * @description The end time of the query. Default value: current time.
     *
     * @example 2020-11-08T17:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of log entries. Default value: 2000.
     *
     * @example 100
     *
     * @var int
     */
    public $maxLines;

    /**
     * @description The node UID. For more information about how to obtain a node UID, see [GetJob](https://help.aliyun.com/document_detail/459677.html).
     *
     * @example fe846462-af2c-4521-bd6f-96787a57****
     *
     * @var string
     */
    public $podUid;

    /**
     * @description The start time of the query. Default value: 7 days ago.
     *
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'downloadToFile' => 'DownloadToFile',
        'endTime' => 'EndTime',
        'maxLines' => 'MaxLines',
        'podUid' => 'PodUid',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

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
