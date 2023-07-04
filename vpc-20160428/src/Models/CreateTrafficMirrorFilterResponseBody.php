<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficMirrorFilterResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 28DB147D-217B-43E8-9E94-A3F6837DDC8A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the mirrored traffic belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the filter.
     *
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;
    protected $_name = [
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
        'trafficMirrorFilterId' => 'TrafficMirrorFilterId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficMirrorFilterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }

        return $model;
    }
}
