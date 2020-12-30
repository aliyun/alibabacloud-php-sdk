<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIImageInfoResponseBody;

use AlibabaCloud\Tea\Model;

class AIImageInfoList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $AIImageInfoId;

    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'AIImageInfoId' => 'AIImageInfoId',
        'fileURL'       => 'FileURL',
        'version'       => 'Version',
        'videoId'       => 'VideoId',
        'jobId'         => 'JobId',
        'score'         => 'Score',
        'format'        => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->AIImageInfoId) {
            $res['AIImageInfoId'] = $this->AIImageInfoId;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIImageInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['AIImageInfoId'])) {
            $model->AIImageInfoId = $map['AIImageInfoId'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
