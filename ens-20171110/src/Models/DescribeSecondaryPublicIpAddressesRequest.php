<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSecondaryPublicIpAddressesRequest extends Model
{
    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $isp;

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
    public $secondaryPublicIpAddress;

    /**
     * @var string
     */
    public $secondaryPublicIpId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
        'isp' => 'Isp',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'secondaryPublicIpAddress' => 'SecondaryPublicIpAddress',
        'secondaryPublicIpId' => 'SecondaryPublicIpId',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegionIds)) {
            Model::validateArray($this->ensRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->ensRegionIds) {
            if (\is_array($this->ensRegionIds)) {
                $res['EnsRegionIds'] = [];
                $n1 = 0;
                foreach ($this->ensRegionIds as $item1) {
                    $res['EnsRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->secondaryPublicIpAddress) {
            $res['SecondaryPublicIpAddress'] = $this->secondaryPublicIpAddress;
        }

        if (null !== $this->secondaryPublicIpId) {
            $res['SecondaryPublicIpId'] = $this->secondaryPublicIpId;
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = [];
                $n1 = 0;
                foreach ($map['EnsRegionIds'] as $item1) {
                    $model->ensRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SecondaryPublicIpAddress'])) {
            $model->secondaryPublicIpAddress = $map['SecondaryPublicIpAddress'];
        }

        if (isset($map['SecondaryPublicIpId'])) {
            $model->secondaryPublicIpId = $map['SecondaryPublicIpId'];
        }

        return $model;
    }
}
