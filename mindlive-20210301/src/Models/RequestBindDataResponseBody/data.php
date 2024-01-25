<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\RequestBindDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $maxKeepSeconds;

    /**
     * @var string
     */
    public $shortUrl;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'code'           => 'Code',
        'maxKeepSeconds' => 'MaxKeepSeconds',
        'shortUrl'       => 'ShortUrl',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->maxKeepSeconds) {
            $res['MaxKeepSeconds'] = $this->maxKeepSeconds;
        }
        if (null !== $this->shortUrl) {
            $res['ShortUrl'] = $this->shortUrl;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MaxKeepSeconds'])) {
            $model->maxKeepSeconds = $map['MaxKeepSeconds'];
        }
        if (isset($map['ShortUrl'])) {
            $model->shortUrl = $map['ShortUrl'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
