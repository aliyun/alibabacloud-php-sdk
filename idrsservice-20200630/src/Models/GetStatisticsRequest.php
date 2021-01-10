<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $dateFrom;

    /**
     * @var string
     */
    public $dateTo;

    /**
     * @var string[]
     */
    public $departmentId;
    protected $_name = [
        'dateFrom'     => 'DateFrom',
        'dateTo'       => 'DateTo',
        'departmentId' => 'DepartmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateFrom) {
            $res['DateFrom'] = $this->dateFrom;
        }
        if (null !== $this->dateTo) {
            $res['DateTo'] = $this->dateTo;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateFrom'])) {
            $model->dateFrom = $map['DateFrom'];
        }
        if (isset($map['DateTo'])) {
            $model->dateTo = $map['DateTo'];
        }
        if (isset($map['DepartmentId'])) {
            if (!empty($map['DepartmentId'])) {
                $model->departmentId = $map['DepartmentId'];
            }
        }

        return $model;
    }
}
