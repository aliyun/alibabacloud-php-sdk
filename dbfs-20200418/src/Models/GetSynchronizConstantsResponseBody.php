<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class GetSynchronizConstantsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $regionData;

    /**
     * @var string
     */
    public $zoneData;

    /**
     * @var string
     */
    public $osversionData;

    /**
     * @var string
     */
    public $productCodeData;

    /**
     * @var string
     */
    public $masterData;

    /**
     * @var string
     */
    public $endpointData;

    /**
     * @var string
     */
    public $accessData;
    protected $_name = [
        'requestId'       => 'RequestId',
        'data'            => 'Data',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
        'pageNumber'      => 'PageNumber',
        'regionData'      => 'RegionData',
        'zoneData'        => 'ZoneData',
        'osversionData'   => 'OsversionData',
        'productCodeData' => 'ProductCodeData',
        'masterData'      => 'MasterData',
        'endpointData'    => 'EndpointData',
        'accessData'      => 'AccessData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->regionData) {
            $res['RegionData'] = $this->regionData;
        }
        if (null !== $this->zoneData) {
            $res['ZoneData'] = $this->zoneData;
        }
        if (null !== $this->osversionData) {
            $res['OsversionData'] = $this->osversionData;
        }
        if (null !== $this->productCodeData) {
            $res['ProductCodeData'] = $this->productCodeData;
        }
        if (null !== $this->masterData) {
            $res['MasterData'] = $this->masterData;
        }
        if (null !== $this->endpointData) {
            $res['EndpointData'] = $this->endpointData;
        }
        if (null !== $this->accessData) {
            $res['AccessData'] = $this->accessData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSynchronizConstantsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RegionData'])) {
            $model->regionData = $map['RegionData'];
        }
        if (isset($map['ZoneData'])) {
            $model->zoneData = $map['ZoneData'];
        }
        if (isset($map['OsversionData'])) {
            $model->osversionData = $map['OsversionData'];
        }
        if (isset($map['ProductCodeData'])) {
            $model->productCodeData = $map['ProductCodeData'];
        }
        if (isset($map['MasterData'])) {
            $model->masterData = $map['MasterData'];
        }
        if (isset($map['EndpointData'])) {
            $model->endpointData = $map['EndpointData'];
        }
        if (isset($map['AccessData'])) {
            $model->accessData = $map['AccessData'];
        }

        return $model;
    }
}
