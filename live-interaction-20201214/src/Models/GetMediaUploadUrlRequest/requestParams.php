<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMediaUploadUrlRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example jpg
     *
     * @var string
     */
    public $mimeType;
    protected $_name = [
        'mimeType' => 'MimeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mimeType) {
            $res['MimeType'] = $this->mimeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MimeType'])) {
            $model->mimeType = $map['MimeType'];
        }

        return $model;
    }
}
