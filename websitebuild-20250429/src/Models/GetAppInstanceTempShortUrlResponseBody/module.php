<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetAppInstanceTempShortUrlResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $expireAtTime;

    /**
     * @var string
     */
    public $tempShortUrl;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'expireAtTime' => 'ExpireAtTime',
        'tempShortUrl' => 'TempShortUrl',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireAtTime) {
            $res['ExpireAtTime'] = $this->expireAtTime;
        }

        if (null !== $this->tempShortUrl) {
            $res['TempShortUrl'] = $this->tempShortUrl;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ExpireAtTime'])) {
            $model->expireAtTime = $map['ExpireAtTime'];
        }

        if (isset($map['TempShortUrl'])) {
            $model->tempShortUrl = $map['TempShortUrl'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
