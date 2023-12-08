<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceUsageResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterResourceUsageResponseBody\data\acuInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var acuInfo[]
     */
    public $acuInfo;

    /**
     * @example amv-uf6dj23rt5zo9s9d
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2023-03-23T02:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2023-03-14T03:42:15Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'acuInfo'     => 'AcuInfo',
        'DBClusterId' => 'DBClusterId',
        'endTime'     => 'EndTime',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acuInfo) {
            $res['AcuInfo'] = [];
            if (null !== $this->acuInfo && \is_array($this->acuInfo)) {
                $n = 0;
                foreach ($this->acuInfo as $item) {
                    $res['AcuInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcuInfo'])) {
            if (!empty($map['AcuInfo'])) {
                $model->acuInfo = [];
                $n              = 0;
                foreach ($map['AcuInfo'] as $item) {
                    $model->acuInfo[$n++] = null !== $item ? acuInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
