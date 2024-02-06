<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeCloudDiskAvailableResourceInfoResponseBody\supportResources;
use AlibabaCloud\Tea\Model;

class DescribeCloudDiskAvailableResourceInfoResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 0AE4F26E-7527-569F-A987-E3CF269A3C11
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
        'requestId'        => 'RequestId',
        'supportResources' => 'SupportResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DescribeCloudDiskAvailableResourceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportResources'])) {
            $model->supportResources = supportResources::fromMap($map['SupportResources']);
        }

        return $model;
    }
}
