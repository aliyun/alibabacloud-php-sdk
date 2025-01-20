<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowTasksResponseBody\taskInfo\task;

use AlibabaCloud\Dara\Model;

class progressStats extends Model
{
    /**
     * @var int
     */
    public $actualBytes;
    /**
     * @var int
     */
    public $actualFiles;
    /**
     * @var int
     */
    public $averageSpeed;
    /**
     * @var int
     */
    public $bytesDone;
    /**
     * @var int
     */
    public $bytesTotal;
    /**
     * @var int
     */
    public $filesDone;
    /**
     * @var int
     */
    public $filesTotal;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
