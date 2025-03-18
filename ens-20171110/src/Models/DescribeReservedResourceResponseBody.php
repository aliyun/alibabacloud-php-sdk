<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\images;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources;
use AlibabaCloud\Tea\Model;

class DescribeReservedResourceResponseBody extends Model
{
    /**
     * @description The returned service code. 0 indicates that the request was successful.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about the image.
     *
     * @var images
     */
    public $images;

    /**
     * @description The request ID.
     *
     * @example 6666C5A5-75ED-422E-A022-7121FA18C968
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resources.
     *
     * @var supportResources
     */
    public $supportResources;
    protected $_name = [
        'code' => 'Code',
        'images' => 'Images',
        'requestId' => 'RequestId',
        'supportResources' => 'SupportResources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportResources) {
            $res['SupportResources'] = null !== $this->supportResources ? $this->supportResources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservedResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportResources'])) {
            $model->supportResources = supportResources::fromMap($map['SupportResources']);
        }

        return $model;
    }
}
