<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListDataPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class dataPackages extends Model
{
    /**
     * @var string
     */
    public $cardCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataPackageId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cardCount'     => 'CardCount',
        'createTime'    => 'CreateTime',
        'dataPackageId' => 'DataPackageId',
        'expiredTime'   => 'ExpiredTime',
        'ISP'           => 'ISP',
        'name'          => 'Name',
        'size'          => 'Size',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardCount) {
            $res['CardCount'] = $this->cardCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardCount'])) {
            $model->cardCount = $map['CardCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
