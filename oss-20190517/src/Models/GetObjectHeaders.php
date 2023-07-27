<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class GetObjectHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The encoding type at the client side.
     * Default value: null
     * @example gzip
     *
     * @var string
     */
    public $acceptEncoding;

    /**
     * @description If the ETag specified in the request matches the ETag value of the object, OSS transmits the object and returns 200 OK. If the ETag specified in the request does not match the ETag value of the object, OSS returns 412 Precondition Failed.
     * Default value: null
     * @example fba9dede5f27731c9771645a3986****
     *
     * @var string
     */
    public $ifMatch;

    /**
     * @description If the time specified in this header is earlier than the object modified time or is invalid, OSS returns the object and 200 OK. If the time specified in this header is later than or the same as the object modified time, OSS returns 304 Not Modified.
     * Default value: null
     * @example Fri, 13 Nov 2015 14:47:53 GMT
     *
     * @var string
     */
    public $ifModifiedSince;

    /**
     * @description If the ETag specified in the request does not match the ETag value of the object, OSS transmits the object and returns 200 OK. If the ETag specified in the request matches the ETag value of the object, OSS returns 304 Not Modified.
     * You can specify both the **If-Match** and **If-None-Match** headers in a request.
     * Default value: null
     * @example 5B3C1A2E0563E1B002CC607C****
     *
     * @var string
     */
    public $ifNoneMatch;

    /**
     * @description If the time specified in this header is the same as or later than the object modified time, OSS returns the object and 200 OK. If the time specified in this header is earlier than the object modified time, OSS returns 412 Precondition Failed.
     *
     * The time must be in GMT. Example: `Fri, 13 Nov 2015 14:47:53 GMT`.
     * You can specify both the **If-Modified-Since** and **If-Unmodified-Since** headers in a request.
     * Default value: null
     * @example Fri, 13 Nov 2015 14:47:53 GMT
     *
     * @var string
     */
    public $ifUnmodifiedSince;

    /**
     * @description The range of data of the object to be returned.
     * Default value: null
     * @example Content-Range: bytes 100-900/344606
     *
     * @var string
     */
    public $range;
    protected $_name = [
        'acceptEncoding'    => 'Accept-Encoding',
        'ifMatch'           => 'If-Match',
        'ifModifiedSince'   => 'If-Modified-Since',
        'ifNoneMatch'       => 'If-None-Match',
        'ifUnmodifiedSince' => 'If-Unmodified-Since',
        'range'             => 'Range',
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
        if (null !== $this->acceptEncoding) {
            $res['Accept-Encoding'] = $this->acceptEncoding;
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
        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetObjectHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['Accept-Encoding'])) {
            $model->acceptEncoding = $map['Accept-Encoding'];
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
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }

        return $model;
    }
}
