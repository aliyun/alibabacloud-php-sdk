<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulTargetStatisticsResponseBody\targetStats\targets;
use AlibabaCloud\Tea\Model;

class targetStats extends Model
{
    /**
     * @description An array that consists of available servers.
     *
     * @var targets[]
     */
    public $targets;

    /**
     * @description The total number of servers.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The number of servers to which the configurations are applied.
     *
     * @example 1
     *
     * @var int
     */
    public $uuidCount;

    /**
     * @description The type of the vulnerability. Valid values:
     *
     *   cve: Linux software vulnerabilities
     *   sys: Windows system vulnerabilities
     *   cms: Web-CMS vulnerabilities
     *   emg: urgent vulnerabilities
     *
     * @example cve
     *
     * @var string
     */
    public $vulType;
    protected $_name = [
        'targets'    => 'Targets',
        'totalCount' => 'TotalCount',
        'uuidCount'  => 'UuidCount',
        'vulType'    => 'VulType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->uuidCount) {
            $res['UuidCount'] = $this->uuidCount;
        }
        if (null !== $this->vulType) {
            $res['VulType'] = $this->vulType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UuidCount'])) {
            $model->uuidCount = $map['UuidCount'];
        }
        if (isset($map['VulType'])) {
            $model->vulType = $map['VulType'];
        }

        return $model;
    }
}
