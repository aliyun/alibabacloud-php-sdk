<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainCustomLogConfigResponseBody extends Model
{
    /**
     * @description The ID of the log configuration.
     *
     * @example 123
     *
     * @var string
     */
    public $configId;

    /**
     * @description The format of the log configuration.
     *
     * @example $time_iso8601_$request_method_$
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the request.
     *
     * @example 94E3559F-7B6A-4A5E-AFFD-44E2A208A249
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sample log configuration.
     *
     * @example [9/Jun/2015:01:58:09+0800]188.165.15.75-1542\"-\"\"GET http://www.aliyun.com/index.html\
     *
     * @var string
     */
    public $sample;

    /**
     * @description The tag information about the log configuration.
     *
     * @example book
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'configId'  => 'ConfigId',
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
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
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
     * @return DescribeDomainCustomLogConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
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
