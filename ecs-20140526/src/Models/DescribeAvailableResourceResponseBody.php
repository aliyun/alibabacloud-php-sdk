<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones;
use AlibabaCloud\Tea\Model;

class DescribeAvailableResourceResponseBody extends Model
{
    /**
     * @description Details about the zones in which resources are available.
     *
     * @var availableZones
     */
    public $availableZones;

    /**
     * @description The ID of the request.
     *
     * @example 0041D94C-FB92-4C49-B115-259DA1C*****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableZones' => 'AvailableZones',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableZones) {
            $res['AvailableZones'] = null !== $this->availableZones ? $this->availableZones->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AvailableZones'])) {
            $model->availableZones = availableZones::fromMap($map['AvailableZones']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
