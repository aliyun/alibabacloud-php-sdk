<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\GetInfiniteCanvasResponseBody;

use AlibabaCloud\Dara\Model;

class infiniteCanvas extends Model
{
    /**
     * @var string
     */
    public $canvasId;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $thumbnail;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'canvasId' => 'CanvasId',
        'coverUrl' => 'CoverUrl',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'thumbnail' => 'Thumbnail',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canvasId) {
            $res['CanvasId'] = $this->canvasId;
        }

        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->thumbnail) {
            $res['Thumbnail'] = $this->thumbnail;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CanvasId'])) {
            $model->canvasId = $map['CanvasId'];
        }

        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Thumbnail'])) {
            $model->thumbnail = $map['Thumbnail'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
