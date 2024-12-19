<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task;

use AlibabaCloud\Tea\Model;

class progressStats extends Model
{
    /**
     * @description The actual amount of data for which the data flow task is complete. Unit: bytes.
     *
     * @example 131092971520
     *
     * @var int
     */
    public $actualBytes;

    /**
     * @description The actual number of files for which the data flow task is complete.
     *
     * @example 3
     *
     * @var int
     */
    public $actualFiles;

    /**
     * @description The average flow velocity. Unit: bytes/s.
     *
     * @example 342279299
     *
     * @var int
     */
    public $averageSpeed;

    /**
     * @description The amount of data (including skipped data) for which the data flow task is complete. Unit: bytes.
     *
     * @example 131092971520
     *
     * @var int
     */
    public $bytesDone;

    /**
     * @description The amount of data scanned on the source. Unit: bytes.
     *
     * @example 131092971520
     *
     * @var int
     */
    public $bytesTotal;

    /**
     * @description The number of files (including skipped files) for which the data flow task is complete.
     *
     * @example 3
     *
     * @var int
     */
    public $filesDone;

    /**
     * @description The number of files scanned on the source.
     *
     * @example 3
     *
     * @var int
     */
    public $filesTotal;

    /**
     * @description The estimated remaining execution time. Unit: seconds.
     *
     * @example 437
     *
     * @var int
     */
    public $remainTime;
    protected $_name = [
        'actualBytes'  => 'ActualBytes',
        'actualFiles'  => 'ActualFiles',
        'averageSpeed' => 'AverageSpeed',
        'bytesDone'    => 'BytesDone',
        'bytesTotal'   => 'BytesTotal',
        'filesDone'    => 'FilesDone',
        'filesTotal'   => 'FilesTotal',
        'remainTime'   => 'RemainTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }
        if (null !== $this->actualFiles) {
            $res['ActualFiles'] = $this->actualFiles;
        }
        if (null !== $this->averageSpeed) {
            $res['AverageSpeed'] = $this->averageSpeed;
        }
        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }
        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }
        if (null !== $this->filesDone) {
            $res['FilesDone'] = $this->filesDone;
        }
        if (null !== $this->filesTotal) {
            $res['FilesTotal'] = $this->filesTotal;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progressStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }
        if (isset($map['ActualFiles'])) {
            $model->actualFiles = $map['ActualFiles'];
        }
        if (isset($map['AverageSpeed'])) {
            $model->averageSpeed = $map['AverageSpeed'];
        }
        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }
        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }
        if (isset($map['FilesDone'])) {
            $model->filesDone = $map['FilesDone'];
        }
        if (isset($map['FilesTotal'])) {
            $model->filesTotal = $map['FilesTotal'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }

        return $model;
    }
}
