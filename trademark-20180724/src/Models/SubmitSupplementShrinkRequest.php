<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SubmitSupplementShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $uploadOssKeyListShrink;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'id'                     => 'Id',
        'uploadOssKeyListShrink' => 'UploadOssKeyList',
        'content'                => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->uploadOssKeyListShrink) {
            $res['UploadOssKeyList'] = $this->uploadOssKeyListShrink;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSupplementShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['UploadOssKeyList'])) {
            $model->uploadOssKeyListShrink = $map['UploadOssKeyList'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
