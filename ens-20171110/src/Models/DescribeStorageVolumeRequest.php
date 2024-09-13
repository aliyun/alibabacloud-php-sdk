<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageVolumeRequest extends Model
{
    /**
     * @example cn-shenzhen-3
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example sgw-****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example 1
     *
     * @var int
     */
    public $isEnable;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example d-***
     *
     * @var string
     */
    public $storageId;

    /**
     * @example sv-***
     *
     * @var string
     */
    public $volumeId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'gatewayId'   => 'GatewayId',
        'isEnable'    => 'IsEnable',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'storageId'   => 'StorageId',
        'volumeId'    => 'VolumeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->storageId) {
            $res['StorageId'] = $this->storageId;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StorageId'])) {
            $model->storageId = $map['StorageId'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
