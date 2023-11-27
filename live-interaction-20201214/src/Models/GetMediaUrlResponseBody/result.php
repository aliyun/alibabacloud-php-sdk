<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUrlResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example http://wu****-file-test.aliyuncs.com/ddmedia/mediaId.type?OSSAccessKeyId=ossak&Signature=sign%3D&Expires=160983****
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'url' => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
