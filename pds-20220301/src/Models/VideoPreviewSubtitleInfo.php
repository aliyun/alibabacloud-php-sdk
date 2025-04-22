<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class VideoPreviewSubtitleInfo extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'language' => 'language',
        'status' => 'status',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
