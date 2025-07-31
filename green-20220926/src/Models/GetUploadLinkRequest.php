<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class GetUploadLinkRequest extends Model
{
    /**
     * @example http://www.aliyuncs.com/test.mp3
     *
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'uploadUrl' => 'UploadUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUploadLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
