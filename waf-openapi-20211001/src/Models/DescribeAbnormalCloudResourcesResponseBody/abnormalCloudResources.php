<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponseBody\abnormalCloudResources\details;

class abnormalCloudResources extends Model
{
    /**
     * @var string
     */
    public $cloudResourceId;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @var int
     */
    public $resourceInstancePort;

    /**
     * @var string
     */
    public $resourceProduct;
    protected $_name = [
        'cloudResourceId' => 'CloudResourceId',
        'details' => 'Details',
        'reason' => 'Reason',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceInstancePort' => 'ResourceInstancePort',
        'resourceProduct' => 'ResourceProduct',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudResourceId) {
            $res['CloudResourceId'] = $this->cloudResourceId;
        }

        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudResourceId'])) {
            $model->cloudResourceId = $map['CloudResourceId'];
        }

        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = details::fromMap($item1);
                    ++$n1;
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
