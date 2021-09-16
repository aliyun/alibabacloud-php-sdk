<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Tea\Model;

class videoBase extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $danMuURL;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'status'       => 'Status',
        'videoId'      => 'VideoId',
        'coverURL'     => 'CoverURL',
        'duration'     => 'Duration',
        'title'        => 'Title',
        'mediaType'    => 'MediaType',
        'danMuURL'     => 'DanMuURL',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->danMuURL) {
            $res['DanMuURL'] = $this->danMuURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoBase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['DanMuURL'])) {
            $model->danMuURL = $map['DanMuURL'];
        }

        return $model;
    }
}
