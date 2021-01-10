<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $departmentName;

    /**
     * @var int
     */
    public $cloudCount;

    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var int
     */
    public $month;

    /**
     * @var int
     */
    public $clientCount;
    protected $_name = [
        'departmentName' => 'DepartmentName',
        'cloudCount'     => 'CloudCount',
        'departmentId'   => 'DepartmentId',
        'month'          => 'Month',
        'clientCount'    => 'ClientCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }
        if (null !== $this->cloudCount) {
            $res['CloudCount'] = $this->cloudCount;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->clientCount) {
            $res['ClientCount'] = $this->clientCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }
        if (isset($map['CloudCount'])) {
            $model->cloudCount = $map['CloudCount'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['ClientCount'])) {
            $model->clientCount = $map['ClientCount'];
        }

        return $model;
    }
}
