<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomLogConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sample;
    protected $_name = [
        'tag'       => 'Tag',
        'requestId' => 'RequestId',
        'remark'    => 'Remark',
        'sample'    => 'Sample',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
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
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }

        return $model;
    }
}
