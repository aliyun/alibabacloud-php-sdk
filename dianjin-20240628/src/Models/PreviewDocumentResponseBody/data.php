<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $previewType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uploadTime;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'previewType' => 'previewType',
        'title' => 'title',
        'uploadTime' => 'uploadTime',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->previewType) {
            $res['previewType'] = $this->previewType;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->uploadTime) {
            $res['uploadTime'] = $this->uploadTime;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['previewType'])) {
            $model->previewType = $map['previewType'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['uploadTime'])) {
            $model->uploadTime = $map['uploadTime'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
