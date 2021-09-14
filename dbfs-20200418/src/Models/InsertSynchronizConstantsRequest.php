<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class InsertSynchronizConstantsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $accessData;

    /**
     * @var string
     */
    public $endpointData;

    /**
     * @var string
     */
    public $masterData;

    /**
     * @var string
     */
    public $productCodeData;

    /**
     * @var string
     */
    public $osversionData;

    /**
     * @var string
     */
    public $zoneData;

    /**
     * @var string
     */
    public $regionData;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'regionId'        => 'RegionId',
        'accessData'      => 'AccessData',
        'endpointData'    => 'EndpointData',
        'masterData'      => 'MasterData',
        'productCodeData' => 'ProductCodeData',
        'osversionData'   => 'OsversionData',
        'zoneData'        => 'ZoneData',
        'regionData'      => 'RegionData',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->accessData) {
            $res['AccessData'] = $this->accessData;
        }
        if (null !== $this->endpointData) {
            $res['EndpointData'] = $this->endpointData;
        }
        if (null !== $this->masterData) {
            $res['MasterData'] = $this->masterData;
        }
        if (null !== $this->productCodeData) {
            $res['ProductCodeData'] = $this->productCodeData;
        }
        if (null !== $this->osversionData) {
            $res['OsversionData'] = $this->osversionData;
        }
        if (null !== $this->zoneData) {
            $res['ZoneData'] = $this->zoneData;
        }
        if (null !== $this->regionData) {
            $res['RegionData'] = $this->regionData;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertSynchronizConstantsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AccessData'])) {
            $model->accessData = $map['AccessData'];
        }
        if (isset($map['EndpointData'])) {
            $model->endpointData = $map['EndpointData'];
        }
        if (isset($map['MasterData'])) {
            $model->masterData = $map['MasterData'];
        }
        if (isset($map['ProductCodeData'])) {
            $model->productCodeData = $map['ProductCodeData'];
        }
        if (isset($map['OsversionData'])) {
            $model->osversionData = $map['OsversionData'];
        }
        if (isset($map['ZoneData'])) {
            $model->zoneData = $map['ZoneData'];
        }
        if (isset($map['RegionData'])) {
            $model->regionData = $map['RegionData'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
