<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class OpreateConstantsResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessData;

    /**
     * @var string
     */
    public $data;

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
    public $osversionData;

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
    public $productCodeData;

    /**
     * @var string
     */
    public $regionData;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $zoneData;
    protected $_name = [
        'accessData'      => 'AccessData',
        'data'            => 'Data',
        'endpointData'    => 'EndpointData',
        'masterData'      => 'MasterData',
        'osversionData'   => 'OsversionData',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'productCodeData' => 'ProductCodeData',
        'regionData'      => 'RegionData',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'zoneData'        => 'ZoneData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessData) {
            $res['AccessData'] = $this->accessData;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->endpointData) {
            $res['EndpointData'] = $this->endpointData;
        }
        if (null !== $this->masterData) {
            $res['MasterData'] = $this->masterData;
        }
        if (null !== $this->osversionData) {
            $res['OsversionData'] = $this->osversionData;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCodeData) {
            $res['ProductCodeData'] = $this->productCodeData;
        }
        if (null !== $this->regionData) {
            $res['RegionData'] = $this->regionData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->zoneData) {
            $res['ZoneData'] = $this->zoneData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpreateConstantsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessData'])) {
            $model->accessData = $map['AccessData'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['EndpointData'])) {
            $model->endpointData = $map['EndpointData'];
        }
        if (isset($map['MasterData'])) {
            $model->masterData = $map['MasterData'];
        }
        if (isset($map['OsversionData'])) {
            $model->osversionData = $map['OsversionData'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCodeData'])) {
            $model->productCodeData = $map['ProductCodeData'];
        }
        if (isset($map['RegionData'])) {
            $model->regionData = $map['RegionData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ZoneData'])) {
            $model->zoneData = $map['ZoneData'];
        }

        return $model;
    }
}
