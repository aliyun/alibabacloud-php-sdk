<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\PreviewDocumentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example pdf
     *
     * @var string
     */
    public $previewType;

    /**
     * @example test
     *
     * @var string
     */
    public $title;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $uploadTime;

    /**
     * @example https://agi.alicdn.com/user/d0o/d3c1f50d-a6c2-49b3-b0c8-3e613c3f20ee_16872_3236784461.png
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'previewType' => 'previewType',
        'title'       => 'title',
        'uploadTime'  => 'uploadTime',
        'url'         => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
