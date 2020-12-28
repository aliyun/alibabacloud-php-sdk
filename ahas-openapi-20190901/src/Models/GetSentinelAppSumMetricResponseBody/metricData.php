<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\GetSentinelAppSumMetricResponseBody;

use AlibabaCloud\Tea\Model;

class metricData extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var float
     */
    public $passCount;

    /**
     * @var int
     */
    public $machineCount;

    /**
     * @var float
     */
    public $avgRt;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var float
     */
    public $totalCount;

    /**
     * @var float
     */
    public $blockCount;
    protected $_name = [
        'appName'      => 'AppName',
        'passCount'    => 'PassCount',
        'machineCount' => 'MachineCount',
        'avgRt'        => 'AvgRt',
        'userId'       => 'UserId',
        'namespace'    => 'Namespace',
        'totalCount'   => 'TotalCount',
        'blockCount'   => 'BlockCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->machineCount) {
            $res['MachineCount'] = $this->machineCount;
        }
        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['MachineCount'])) {
            $model->machineCount = $map['MachineCount'];
        }
        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }

        return $model;
    }
}
