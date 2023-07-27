<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CopyObjectResponseBody extends Model
{
    /**
     * @example 5B3C1A2E053D763E1B002CC607C5****
     *
     * @var string
     */
    public $ETag;

    /**
     * @example Fri, 24 Feb 2012 07:18:48 GMT
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
     * @return CopyObjectResponseBody
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
