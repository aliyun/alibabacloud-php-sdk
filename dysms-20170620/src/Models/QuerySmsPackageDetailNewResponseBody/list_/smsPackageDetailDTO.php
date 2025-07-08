<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsPackageDetailNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class smsPackageDetailDTO extends Model
{
    /**
     * @var int
     */
    public $invalidTime;

    /**
     * @var int
     */
    public $orderTime;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var int
     */
    public $remainCount;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'invalidTime' => 'InvalidTime',
        'orderTime' => 'OrderTime',
        'packageType' => 'PackageType',
        'remainCount' => 'RemainCount',
        'status' => 'Status',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidTime) {
            $res['InvalidTime'] = $this->invalidTime;
        }

        if (null !== $this->orderTime) {
            $res['OrderTime'] = $this->orderTime;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->remainCount) {
            $res['RemainCount'] = $this->remainCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['InvalidTime'])) {
            $model->invalidTime = $map['InvalidTime'];
        }

        if (isset($map['OrderTime'])) {
            $model->orderTime = $map['OrderTime'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['RemainCount'])) {
            $model->remainCount = $map['RemainCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
