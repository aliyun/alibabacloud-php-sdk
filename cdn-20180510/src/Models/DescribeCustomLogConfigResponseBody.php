<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomLogConfigResponseBody extends Model
{
    /**
     * @description The format of the log configuration.
     *
     * @example $time_iso8601_$request_method_$
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the custom configuration.
     *
     * @example 94E3559F-7B6A-4A5E-AFFD-44E2A208A249
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request.
     *
     * @example "[9/Jun/2015:01:58:09 +0800] 188.165.15.75 - 1542 \"-\" \"GEThttp: //www.aliyun.com/index.html\" 200
     *
     * @var string
     */
    public $sample;

    /**
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *
     * @example img1
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'remark'    => 'Remark',
        'requestId' => 'RequestId',
        'sample'    => 'Sample',
        'tag'       => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
