<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

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
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'tenantId' => 'TenantId',
        'zoneIdList' => 'ZoneIdList',
        'zoneNameList' => 'ZoneNameList',
    ];

    public function validate()
    {
        if (\is_array($this->zoneIdList)) {
            Model::validateArray($this->zoneIdList);
        }
        if (\is_array($this->zoneNameList)) {
            Model::validateArray($this->zoneNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->zoneIdList)) {
                $res['ZoneIdList'] = [];
                $n1 = 0;
                foreach ($this->zoneIdList as $item1) {
                    $res['ZoneIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneNameList) {
            if (\is_array($this->zoneNameList)) {
                $res['ZoneNameList'] = [];
                $n1 = 0;
                foreach ($this->zoneNameList as $item1) {
                    $res['ZoneNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->zoneIdList = [];
                $n1 = 0;
                foreach ($map['ZoneIdList'] as $item1) {
                    $model->zoneIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneNameList'])) {
            if (!empty($map['ZoneNameList'])) {
                $model->zoneNameList = [];
                $n1 = 0;
                foreach ($map['ZoneNameList'] as $item1) {
                    $model->zoneNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
