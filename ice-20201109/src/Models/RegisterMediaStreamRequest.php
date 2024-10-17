<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaStreamRequest extends Model
{
    /**
     * @description The URL of the media asset in another service. The URL is associated with the ID of the media asset in IMS. The URL cannot be modified once registered.
     *
     * oss://example-bucket/example.mp4: In this format, it is considered by default that the region of the OSS bucket in which the media asset resides is the same as the region in which IMS is activated.
     * @var string
     */
    public $inputURL;

    /**
     * @description The ID of the media asset.
     *
     * @example 5e778ec0027b71ed80a8909598506***
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The user data.
     *
     * @example {"MessageCallback":{"CallbackURL":"http://test.test.com"}, "Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'inputURL' => 'InputURL',
        'mediaId'  => 'MediaId',
        'userData' => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMediaStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
