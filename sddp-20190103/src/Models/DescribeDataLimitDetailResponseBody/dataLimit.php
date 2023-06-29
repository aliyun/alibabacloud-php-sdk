<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitDetailResponseBody;

use AlibabaCloud\Tea\Model;

class dataLimit extends Model
{
    /**
     * @description The status of the connectivity test between the data asset and DSC. Valid values:
     *
     *   **2**: indicates that the data asset was being connected.
     *   **3**: indicates that the data asset was connected to DSC.
     *   **4**: indicates that the data asset failed to be connected.
     *
     * @example 3
     *
     * @var int
     */
    public $checkStatus;

    /**
     * @description The result that indicates the status of the connectivity test between the data asset and DSC. Valid values:
     *
     *   **Passed**
     *   **Failed**
     *   **Testing**
     *
     * @example Passed
     *
     * @var string
     */
    public $checkStatusName;

    /**
     * @description The time when the data asset was connected to DSC. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 145600000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The ID of the data asset.
     *
     * @example 12300
     *
     * @var int
     */
    public $id;

    /**
     * @description The region in which the data asset resides.
     *
     * @example China (Qingdao)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID and name of the data asset in the service to which the data asset belongs.
     *
     * @example rm-m5eup49p6o274****.RDS_example
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The port number that is used to connect to the database.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the region in which the data asset resides.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the service to which the data asset belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: OSS
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *
     * @example 1
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The service to which the data asset belongs. Valid values:
     *
     *   **MaxCompute**
     *   **OSS**
     *   **ADS**
     *   **OTS**
     *   **RDS**
     *
     * @example RDS
     *
     * @var string
     */
    public $resourceTypeCode;

    /**
     * @description The account of the user who manages the data asset.
     *
     * @example User01
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'checkStatus'      => 'CheckStatus',
        'checkStatusName'  => 'CheckStatusName',
        'gmtCreate'        => 'GmtCreate',
        'id'               => 'Id',
        'localName'        => 'LocalName',
        'parentId'         => 'ParentId',
        'port'             => 'Port',
        'regionId'         => 'RegionId',
        'resourceType'     => 'ResourceType',
        'resourceTypeCode' => 'ResourceTypeCode',
        'userName'         => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkStatusName) {
            $res['CheckStatusName'] = $this->checkStatusName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceTypeCode) {
            $res['ResourceTypeCode'] = $this->resourceTypeCode;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckStatusName'])) {
            $model->checkStatusName = $map['CheckStatusName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceTypeCode'])) {
            $model->resourceTypeCode = $map['ResourceTypeCode'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
