<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCasterVideoResourceResponseBody extends Model
{
    /**
     * @description The ID of the production studio. This parameter is used in the requests of the following operations: DescribeCasterVideoResources, AddCasterLayout, and DescribeCasterLayouts.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The ID of the request.
     *
     * @example CF60DB6A-7FD6-426E-9288-122CC1A52FA7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource.
     *
     * @example 98461064-1c94-4dc1-85ce-94098764****
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'casterId' => 'CasterId',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCasterVideoResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
