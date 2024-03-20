<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeKmsAssociateResourcesResponseBody\associateDBInstances;
use AlibabaCloud\Tea\Model;

class DescribeKmsAssociateResourcesResponseBody extends Model
{
    /**
     * @var associateDBInstances[]
     */
    public $associateDBInstances;

    /**
     * @example true
     *
     * @var bool
     */
    public $associateStatus;

    /**
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'associateDBInstances' => 'AssociateDBInstances',
        'associateStatus'      => 'AssociateStatus',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associateDBInstances) {
            $res['AssociateDBInstances'] = [];
            if (null !== $this->associateDBInstances && \is_array($this->associateDBInstances)) {
                $n = 0;
                foreach ($this->associateDBInstances as $item) {
                    $res['AssociateDBInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->associateStatus) {
            $res['AssociateStatus'] = $this->associateStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKmsAssociateResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociateDBInstances'])) {
            if (!empty($map['AssociateDBInstances'])) {
                $model->associateDBInstances = [];
                $n                           = 0;
                foreach ($map['AssociateDBInstances'] as $item) {
                    $model->associateDBInstances[$n++] = null !== $item ? associateDBInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AssociateStatus'])) {
            $model->associateStatus = $map['AssociateStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
