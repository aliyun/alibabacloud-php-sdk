<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class DescribeWorkZonesRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $zoneIdList;

    /**
     * @var string[]
     */
    public $zoneNameList;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'tenantId'     => 'TenantId',
        'zoneIdList'   => 'ZoneIdList',
        'zoneNameList' => 'ZoneNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->zoneIdList) {
            $res['ZoneIdList'] = $this->zoneIdList;
        }
        if (null !== $this->zoneNameList) {
            $res['ZoneNameList'] = $this->zoneNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ZoneIdList'])) {
            if (!empty($map['ZoneIdList'])) {
                $model->zoneIdList = $map['ZoneIdList'];
            }
        }
        if (isset($map['ZoneNameList'])) {
            if (!empty($map['ZoneNameList'])) {
                $model->zoneNameList = $map['ZoneNameList'];
            }
        }

        return $model;
    }
}
