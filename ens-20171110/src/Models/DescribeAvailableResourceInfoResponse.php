<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse\images;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponse\supportResources;
use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceInfoResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var supportResources
     */
    public $supportResources;

    /**
     * @var images
     */
    public $images;
    protected $_name = [
        'requestId'        => 'RequestId',
        'supportResources' => 'SupportResources',
        'images'           => 'Images',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('supportResources', $this->supportResources, true);
        Model::validateRequired('images', $this->images, true);
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
        if (null !== $this->images) {
            $res['Images'] = null !== $this->images ? $this->images->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableResourceInfoResponse
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
        if (isset($map['Images'])) {
            $model->images = images::fromMap($map['Images']);
        }

        return $model;
    }
}
