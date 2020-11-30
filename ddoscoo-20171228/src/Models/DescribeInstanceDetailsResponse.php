<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceDetailsResponse\instanceDetails;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDetailsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceDetails[]
     */
    public $instanceDetails;
    protected $_name = [
        'requestId'       => 'RequestId',
        'instanceDetails' => 'InstanceDetails',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceDetails', $this->instanceDetails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceDetails) {
            $res['InstanceDetails'] = [];
            if (null !== $this->instanceDetails && \is_array($this->instanceDetails)) {
                $n = 0;
                foreach ($this->instanceDetails as $item) {
                    $res['InstanceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceDetailsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceDetails'])) {
            if (!empty($map['InstanceDetails'])) {
                $model->instanceDetails = [];
                $n                      = 0;
                foreach ($map['InstanceDetails'] as $item) {
                    $model->instanceDetails[$n++] = null !== $item ? instanceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
