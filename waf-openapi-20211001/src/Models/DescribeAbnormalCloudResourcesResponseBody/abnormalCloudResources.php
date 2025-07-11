<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponseBody\abnormalCloudResources\details;
use AlibabaCloud\Tea\Model;

class abnormalCloudResources extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @example CertExpired
     *
     * @var string
     */
    public $reason;

    /**
     * @example lb-***
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @example test-name
     *
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @example 80
     *
     * @var int
     */
    public $resourceInstancePort;

    /**
     * @example clb7
     *
     * @var string
     */
    public $resourceProduct;
    protected $_name = [
        'details' => 'Details',
        'reason' => 'Reason',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceInstancePort' => 'ResourceInstancePort',
        'resourceProduct' => 'ResourceProduct',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }
        if (null !== $this->resourceInstancePort) {
            $res['ResourceInstancePort'] = $this->resourceInstancePort;
        }
        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return abnormalCloudResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }
        if (isset($map['ResourceInstancePort'])) {
            $model->resourceInstancePort = $map['ResourceInstancePort'];
        }
        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }

        return $model;
    }
}
