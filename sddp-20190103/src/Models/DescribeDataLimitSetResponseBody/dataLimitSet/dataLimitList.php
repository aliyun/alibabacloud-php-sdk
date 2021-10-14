<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet;

use AlibabaCloud\Tea\Model;

class dataLimitList extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $connector;

    /**
     * @var string
     */
    public $checkStatusName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $resourceTypeCode;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'localName'        => 'LocalName',
        'checkStatus'      => 'CheckStatus',
        'connector'        => 'Connector',
        'checkStatusName'  => 'CheckStatusName',
        'regionId'         => 'RegionId',
        'parentId'         => 'ParentId',
        'resourceType'     => 'ResourceType',
        'gmtCreate'        => 'GmtCreate',
        'resourceTypeCode' => 'ResourceTypeCode',
        'userName'         => 'UserName',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->connector) {
            $res['Connector'] = $this->connector;
        }
        if (null !== $this->checkStatusName) {
            $res['CheckStatusName'] = $this->checkStatusName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->resourceTypeCode) {
            $res['ResourceTypeCode'] = $this->resourceTypeCode;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['Connector'])) {
            $model->connector = $map['Connector'];
        }
        if (isset($map['CheckStatusName'])) {
            $model->checkStatusName = $map['CheckStatusName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ResourceTypeCode'])) {
            $model->resourceTypeCode = $map['ResourceTypeCode'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
