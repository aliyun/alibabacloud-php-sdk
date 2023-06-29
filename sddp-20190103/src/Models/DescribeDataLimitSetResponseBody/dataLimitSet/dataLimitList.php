<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet;

use AlibabaCloud\Tea\Model;

class dataLimitList extends Model
{
    /**
     * @description Indicates whether the test of connectivity between DSC and the data asset is passed.
     *
     *   **2**: The connectivity test is in progress.
     *   **3**: The connectivity test is passed.
     *   **4**: The connectivity test failed.
     *
     * @example 3
     *
     * @var int
     */
    public $checkStatus;

    /**
     * @description The name of the data detection status.
     *
     * @example Connectivity test status
     *
     * @var string
     */
    public $checkStatusName;

    /**
     * @description The connection string that is used to access the data asset.
     *
     * @example Connection string
     *
     * @var string
     */
    public $connector;

    /**
     * @description The time when the data asset was created. Unit: milliseconds.
     *
     * @example 1625587423000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The ID of the data asset.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The region in which the data asset resides.
     *
     * @example China (Hangzhou)
     *
     * @var string
     */
    public $localName;

    /**
     * @description The parent asset ID of the data asset.
     *
     * @example db
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The region in which the data asset resides.
     *
     * @example cn-****
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of service to which the data asset belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: OSS
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *
     * @example 2
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The code of the service to which the data asset belongs. Valid values:
     *
     *   **ODPS**
     *   **OSS**
     *   **ADS**
     *   **OTS**
     *   **RDS**
     *
     * @example OSS
     *
     * @var string
     */
    public $resourceTypeCode;

    /**
     * @description The username that is used to access the data asset.
     *
     * @example tsts
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'checkStatus'      => 'CheckStatus',
        'checkStatusName'  => 'CheckStatusName',
        'connector'        => 'Connector',
        'gmtCreate'        => 'GmtCreate',
        'id'               => 'Id',
        'localName'        => 'LocalName',
        'parentId'         => 'ParentId',
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
        if (null !== $this->connector) {
            $res['Connector'] = $this->connector;
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
     * @return dataLimitList
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
        if (isset($map['Connector'])) {
            $model->connector = $map['Connector'];
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
