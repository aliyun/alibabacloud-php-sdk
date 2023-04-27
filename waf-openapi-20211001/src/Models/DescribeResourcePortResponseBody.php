<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcePortResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 66A98669-CC6E-4F3E-80A6-3014697B11AE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array of HTTP and HTTPS listener ports that are added to the WAF instance.
     *
     * @var string[]
     */
    public $resourcePorts;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourcePorts' => 'ResourcePorts',
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
        if (null !== $this->resourcePorts) {
            $res['ResourcePorts'] = $this->resourcePorts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePortResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourcePorts'])) {
            if (!empty($map['ResourcePorts'])) {
                $model->resourcePorts = $map['ResourcePorts'];
            }
        }

        return $model;
    }
}
