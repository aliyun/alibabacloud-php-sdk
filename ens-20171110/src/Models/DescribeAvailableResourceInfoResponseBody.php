<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\images;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources;
use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceInfoResponseBody extends Model
{
    /**
     * @description The information about the image.
     *
     * @var images
     */
    public $images;

    /**
     * @description The request ID.
     *
     * @example 8629F679-B51D-4194-A1CC-5D8F504C362B
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
     * @return DescribeAvailableResourceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
