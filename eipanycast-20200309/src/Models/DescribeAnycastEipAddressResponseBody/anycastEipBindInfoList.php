<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\anycastEipBindInfoList\popLocations;
use AlibabaCloud\Tea\Model;

class anycastEipBindInfoList extends Model
{
    /**
     * @description 绑定模式 Normal、Default
     *
     * @var string
     */
    public $associationMode;

    /**
     * @var string
     */
    public $bindInstanceId;

    /**
     * @var string
     */
    public $bindInstanceRegionId;

    /**
     * @var string
     */
    public $bindInstanceType;

    /**
     * @var string
     */
    public $bindTime;

    /**
     * @description 关联的pop点
     *
     * @var popLocations[]
     */
    public $popLocations;

    /**
     * @description ip地址
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'associationMode'      => 'AssociationMode',
        'bindInstanceId'       => 'BindInstanceId',
        'bindInstanceRegionId' => 'BindInstanceRegionId',
        'bindInstanceType'     => 'BindInstanceType',
        'bindTime'             => 'BindTime',
        'popLocations'         => 'PopLocations',
        'privateIpAddress'     => 'PrivateIpAddress',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associationMode) {
            $res['AssociationMode'] = $this->associationMode;
        }
        if (null !== $this->bindInstanceId) {
            $res['BindInstanceId'] = $this->bindInstanceId;
        }
        if (null !== $this->bindInstanceRegionId) {
            $res['BindInstanceRegionId'] = $this->bindInstanceRegionId;
        }
        if (null !== $this->bindInstanceType) {
            $res['BindInstanceType'] = $this->bindInstanceType;
        }
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }
        if (null !== $this->popLocations) {
            $res['PopLocations'] = [];
            if (null !== $this->popLocations && \is_array($this->popLocations)) {
                $n = 0;
                foreach ($this->popLocations as $item) {
                    $res['PopLocations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anycastEipBindInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociationMode'])) {
            $model->associationMode = $map['AssociationMode'];
        }
        if (isset($map['BindInstanceId'])) {
            $model->bindInstanceId = $map['BindInstanceId'];
        }
        if (isset($map['BindInstanceRegionId'])) {
            $model->bindInstanceRegionId = $map['BindInstanceRegionId'];
        }
        if (isset($map['BindInstanceType'])) {
            $model->bindInstanceType = $map['BindInstanceType'];
        }
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }
        if (isset($map['PopLocations'])) {
            if (!empty($map['PopLocations'])) {
                $model->popLocations = [];
                $n                   = 0;
                foreach ($map['PopLocations'] as $item) {
                    $model->popLocations[$n++] = null !== $item ? popLocations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
