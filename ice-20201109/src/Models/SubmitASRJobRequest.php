<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitASRJobRequest extends Model
{
    /**
     * @description The job description, which can up to 128 bytes in length.
     *
     * @example 测试描述
     *
     * @var string
     */
    public $description;

    /**
     * @description The speech duration.
     *
     * @example 00:00:10
     *
     * @var string
     */
    public $duration;

    /**
     * @description The input file. You can specify an Object Storage Service (OSS) URL or the ID of a media asset in the media asset library.
     *
     * @example oss://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4 或 ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $inputFile;

    /**
     * @description The start time of the speech to recognize.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The job title, which can be up to 128 bytes in length.
     *
     * @example 测试标题
     *
     * @var string
     */
    public $title;

    /**
     * @description The user-defined data in the JSON format. You can specify your business information, such as the business environment and job information.
     *
     * @example {
     * }
     * @var string
     */
    public $userData;
    protected $_name = [
        'description' => 'Description',
        'duration'    => 'Duration',
        'inputFile'   => 'InputFile',
        'startTime'   => 'StartTime',
        'title'       => 'Title',
        'userData'    => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->inputFile) {
            $res['InputFile'] = $this->inputFile;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitASRJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InputFile'])) {
            $model->inputFile = $map['InputFile'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
