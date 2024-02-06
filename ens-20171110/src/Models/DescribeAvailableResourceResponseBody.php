<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponseBody\images;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceResponseBody\supportResources;
use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceResponseBody extends Model
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
     * @description The details of the images.
     *
     * @var images
     */
    public $images;

    /**
     * @description The ID of the request. This is a common parameter. Each request has a unique ID. You can use this ID to troubleshoot issues.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The specifications of resources that you can purchase.
     *
     * @var supportResources
     */
    public $supportResources;
    protected $_name = [
        'code'             => 'Code',
        'images'           => 'Images',
        'requestId'        => 'RequestId',
        'supportResources' => 'SupportResources',
    ];

    public function validate()
    {
    }

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
     * @return DescribeAvailableResourceResponseBody
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
