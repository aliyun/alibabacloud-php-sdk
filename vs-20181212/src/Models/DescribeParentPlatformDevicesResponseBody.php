<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeParentPlatformDevicesResponseBody\devices;

class DescribeParentPlatformDevicesResponseBody extends Model
{
    /**
     * @var devices[]
     */
    public $devices;

    /**
     * @var int
     */
    public $pageCount;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'devices' => 'Devices',
        'pageCount' => 'PageCount',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->devices)) {
            Model::validateArray($this->devices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devices) {
            if (\is_array($this->devices)) {
                $res['Devices'] = [];
                $n1 = 0;
                foreach ($this->devices as $item1) {
                    $res['Devices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Devices'])) {
            if (!empty($map['Devices'])) {
                $model->devices = [];
                $n1 = 0;
                foreach ($map['Devices'] as $item1) {
                    $model->devices[$n1++] = devices::fromMap($item1);
                }
            }
        }

        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
