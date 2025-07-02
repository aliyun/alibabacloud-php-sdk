<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class DescribeDeviceSeatsRequest extends Model
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
    public $serialNo;

    /**
     * @var string[]
     */
    public $serialNoList;

    /**
     * @var string
     */
    public $siteId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'serialNo' => 'SerialNo',
        'serialNoList' => 'SerialNoList',
        'siteId' => 'SiteId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->serialNoList)) {
            Model::validateArray($this->serialNoList);
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

        if (null !== $this->serialNo) {
            $res['SerialNo'] = $this->serialNo;
        }

        if (null !== $this->serialNoList) {
            if (\is_array($this->serialNoList)) {
                $res['SerialNoList'] = [];
                $n1 = 0;
                foreach ($this->serialNoList as $item1) {
                    $res['SerialNoList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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

        if (isset($map['SerialNo'])) {
            $model->serialNo = $map['SerialNo'];
        }

        if (isset($map['SerialNoList'])) {
            if (!empty($map['SerialNoList'])) {
                $model->serialNoList = [];
                $n1 = 0;
                foreach ($map['SerialNoList'] as $item1) {
                    $model->serialNoList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
