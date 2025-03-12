<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponseBody\instanceDetails;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDetailsResponseBody extends Model
{
    /**
     * @var instanceDetails[]
     */
    public $instanceDetails;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceDetails' => 'InstanceDetails',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDetails) {
            $res['InstanceDetails'] = [];
            if (null !== $this->instanceDetails && \is_array($this->instanceDetails)) {
                $n = 0;
                foreach ($this->instanceDetails as $item) {
                    $res['InstanceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDetails'])) {
            if (!empty($map['InstanceDetails'])) {
                $model->instanceDetails = [];
                $n                      = 0;
                foreach ($map['InstanceDetails'] as $item) {
                    $model->instanceDetails[$n++] = null !== $item ? instanceDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
