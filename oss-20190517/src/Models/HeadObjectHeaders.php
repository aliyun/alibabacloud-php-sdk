<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class HeadObjectHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description If the ETag value that is specified in the request matches the ETag value of the object, OSS returns 200 OK and the metadata of the object. Otherwise, OSS returns 412 precondition failed.
     * Default value: null.
     * @example fba9dede5f27731c9771645a3986****
     *
     * @var string
     */
    public $ifMatch;

    /**
     * @description If the time that is specified in the request is earlier than the time when the object is modified, OSS returns 200 OK and the metadata of the object. Otherwise, OSS returns 304 not modified.
     * Default value: null.
     * @example Fri, 9 Apr 2021 14:47:53 GMT
     *
     * @var string
     */
    public $ifModifiedSince;

    /**
     * @description If the ETag value that is specified in the request does not match the ETag value of the object, OSS returns 200 OK and the metadata of the object. Otherwise, OSS returns 304 Not Modified.
     * Default value: null.
     * @example 5B3C1A2E0563E1B002CC607C****
     *
     * @var string
     */
    public $ifNoneMatch;

    /**
     * @description If the time that is specified in the request is later than or the same as the time when the object is modified, OSS returns 200 OK and the metadata of the object. Otherwise, OSS returns 412 precondition failed.
     * Default value: null.
     * @example Fri, 13 Oct 2021 14:47:53 GMT
     *
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
