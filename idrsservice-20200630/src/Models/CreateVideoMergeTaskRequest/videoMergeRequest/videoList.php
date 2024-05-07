<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest;

use AlibabaCloud\Tea\Model;

class videoList extends Model
{
    /**
     * @example 2021-12-28
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @example http://shuanglu-record-finance.oss-cn-shanghai.aliyuncs.com/record/4x5avhil/264516_33430_1/2022-03-21-13-56-38_2022-03-21-14-17-22.mp4
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example 5
     *
     * @var int
     */
    public $mergeBeginTime;

    /**
     * @example 15
     *
     * @var int
     */
    public $mergeEndTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $primeVideo;

    /**
     * @example 2022-03-05
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'fileName'       => 'FileName',
        'fileUrl'        => 'FileUrl',
        'mergeBeginTime' => 'MergeBeginTime',
        'mergeEndTime'   => 'MergeEndTime',
        'primeVideo'     => 'PrimeVideo',
        'startTime'      => 'StartTime',
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
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->mergeBeginTime) {
            $res['MergeBeginTime'] = $this->mergeBeginTime;
        }
        if (null !== $this->mergeEndTime) {
            $res['MergeEndTime'] = $this->mergeEndTime;
        }
        if (null !== $this->primeVideo) {
            $res['PrimeVideo'] = $this->primeVideo;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['MergeBeginTime'])) {
            $model->mergeBeginTime = $map['MergeBeginTime'];
        }
        if (isset($map['MergeEndTime'])) {
            $model->mergeEndTime = $map['MergeEndTime'];
        }
        if (isset($map['PrimeVideo'])) {
            $model->primeVideo = $map['PrimeVideo'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
