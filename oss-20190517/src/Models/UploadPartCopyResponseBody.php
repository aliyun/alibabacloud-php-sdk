<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class UploadPartCopyResponseBody extends Model
{
    /**
     * @example 250F8A0AE989679A22926A875F0A2****
     *
     * @var string
     */
    public $ETag;

    /**
     * @example 2019-04-09T07:27:28.000Z
     *
     * @var string
     */
    public $lastModified;
    protected $_name = [
        'ETag'         => 'ETag',
        'lastModified' => 'LastModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadPartCopyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
        }

        return $model;
    }
}
