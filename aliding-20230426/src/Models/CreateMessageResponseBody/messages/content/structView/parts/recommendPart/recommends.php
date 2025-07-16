<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content\structView\parts\recommendPart;

use AlibabaCloud\Tea\Model;

class recommends extends Model
{
    /**
     * @var string
     */
    public $mobileUrl;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'mobileUrl' => 'mobileUrl',
        'text' => 'text',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mobileUrl) {
            $res['mobileUrl'] = $this->mobileUrl;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommends
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mobileUrl'])) {
            $model->mobileUrl = $map['mobileUrl'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
