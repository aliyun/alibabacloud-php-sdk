<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class UpdateInfiniteCanvasRequest extends Model
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
    public $title;
    protected $_name = [
        'canvasId' => 'CanvasId',
        'coverUrl' => 'CoverUrl',
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

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
