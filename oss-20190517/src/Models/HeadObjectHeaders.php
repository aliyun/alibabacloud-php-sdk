<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class HeadObjectHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $ifMatch;

    /**
     * @var string
     */
    public $ifModifiedSince;

    /**
     * @var string
     */
    public $ifNoneMatch;

    /**
     * @var string
     */
    public $ifUnmodifiedSince;
    protected $_name = [
        'ifMatch'           => 'If-Match',
        'ifModifiedSince'   => 'If-Modified-Since',
        'ifNoneMatch'       => 'If-None-Match',
        'ifUnmodifiedSince' => 'If-Unmodified-Since',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->ifMatch) {
            $res['If-Match'] = $this->ifMatch;
        }
        if (null !== $this->ifModifiedSince) {
            $res['If-Modified-Since'] = $this->ifModifiedSince;
        }
        if (null !== $this->ifNoneMatch) {
            $res['If-None-Match'] = $this->ifNoneMatch;
        }
        if (null !== $this->ifUnmodifiedSince) {
            $res['If-Unmodified-Since'] = $this->ifUnmodifiedSince;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HeadObjectHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['If-Match'])) {
            $model->ifMatch = $map['If-Match'];
        }
        if (isset($map['If-Modified-Since'])) {
            $model->ifModifiedSince = $map['If-Modified-Since'];
        }
        if (isset($map['If-None-Match'])) {
            $model->ifNoneMatch = $map['If-None-Match'];
        }
        if (isset($map['If-Unmodified-Since'])) {
            $model->ifUnmodifiedSince = $map['If-Unmodified-Since'];
        }

        return $model;
    }
}
