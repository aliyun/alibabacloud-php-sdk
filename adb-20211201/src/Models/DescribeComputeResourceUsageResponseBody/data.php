<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeComputeResourceUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeComputeResourceUsageResponseBody\data\acuInfo;

class data extends Model
{
    /**
     * @var acuInfo[]
     */
    public $acuInfo;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $resourceGroupType;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'acuInfo' => 'AcuInfo',
        'DBClusterId' => 'DBClusterId',
        'endTime' => 'EndTime',
        'resourceGroupName' => 'ResourceGroupName',
        'resourceGroupType' => 'ResourceGroupType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->acuInfo)) {
            Model::validateArray($this->acuInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acuInfo) {
            if (\is_array($this->acuInfo)) {
                $res['AcuInfo'] = [];
                $n1 = 0;
                foreach ($this->acuInfo as $item1) {
                    $res['AcuInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AcuInfo'])) {
            if (!empty($map['AcuInfo'])) {
                $model->acuInfo = [];
                $n1 = 0;
                foreach ($map['AcuInfo'] as $item1) {
                    $model->acuInfo[$n1] = acuInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
