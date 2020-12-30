<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVideoInfoRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $downloadSwitch;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $customMediaInfo;
    protected $_name = [
        'videoId'         => 'VideoId',
        'title'           => 'Title',
        'tags'            => 'Tags',
        'description'     => 'Description',
        'coverURL'        => 'CoverURL',
        'cateId'          => 'CateId',
        'downloadSwitch'  => 'DownloadSwitch',
        'status'          => 'Status',
        'customMediaInfo' => 'CustomMediaInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->downloadSwitch) {
            $res['DownloadSwitch'] = $this->downloadSwitch;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->customMediaInfo) {
            $res['CustomMediaInfo'] = $this->customMediaInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVideoInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['DownloadSwitch'])) {
            $model->downloadSwitch = $map['DownloadSwitch'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CustomMediaInfo'])) {
            $model->customMediaInfo = $map['CustomMediaInfo'];
        }

        return $model;
    }
}
