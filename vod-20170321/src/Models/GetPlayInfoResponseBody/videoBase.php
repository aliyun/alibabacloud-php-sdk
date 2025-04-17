<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Dara\Model;

class videoBase extends Model
{
    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $danMuURL;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'coverURL' => 'CoverURL',
        'creationTime' => 'CreationTime',
        'danMuURL' => 'DanMuURL',
        'duration' => 'Duration',
        'mediaType' => 'MediaType',
        'status' => 'Status',
        'storageClass' => 'StorageClass',
        'title' => 'Title',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->danMuURL) {
            $res['DanMuURL'] = $this->danMuURL;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DanMuURL'])) {
            $model->danMuURL = $map['DanMuURL'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
