<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListDataReportForServiceGroupRequest extends Model
{
    /**
     * @description 结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 服务组名称
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'          => 'endTime',
        'serviceGroupName' => 'serviceGroupName',
        'startTime'        => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataReportForServiceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
