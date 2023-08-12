<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions;
use AlibabaCloud\Tea\Model;

class GetServiceProvisionsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example A9938C04-26AD-5EFA-B394-EA7866842DFF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the services.
     *
     * @var serviceProvisions[]
     */
    public $serviceProvisions;
    protected $_name = [
        'requestId'         => 'RequestId',
        'serviceProvisions' => 'ServiceProvisions',
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
        if (null !== $this->serviceProvisions) {
            $res['ServiceProvisions'] = [];
            if (null !== $this->serviceProvisions && \is_array($this->serviceProvisions)) {
                $n = 0;
                foreach ($this->serviceProvisions as $item) {
                    $res['ServiceProvisions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceProvisionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceProvisions'])) {
            if (!empty($map['ServiceProvisions'])) {
                $model->serviceProvisions = [];
                $n                        = 0;
                foreach ($map['ServiceProvisions'] as $item) {
                    $model->serviceProvisions[$n++] = null !== $item ? serviceProvisions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
