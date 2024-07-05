<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribePurchasedDeviceResponseBody extends Model
{
    /**
     * @example 2018-12-10T21:00:00Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 348*****174-cn-qingdao
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example 33763****77224964-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 2117*****0447
     *
     * @var string
     */
    public $orderId;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;

    /**
     * @example 12345*****67890
     *
     * @var string
     */
    public $registerCode;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example dome
     *
     * @var string
     */
    public $subType;

    /**
     * @example ipc
     *
     * @var string
     */
    public $type;

    /**
     * @example 8yd*****qem
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'createdTime'  => 'CreatedTime',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'id'           => 'Id',
        'name'         => 'Name',
        'orderId'      => 'OrderId',
        'region'       => 'Region',
        'registerCode' => 'RegisterCode',
        'requestId'    => 'RequestId',
        'subType'      => 'SubType',
        'type'         => 'Type',
        'vendor'       => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->registerCode) {
            $res['RegisterCode'] = $this->registerCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePurchasedDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegisterCode'])) {
            $model->registerCode = $map['RegisterCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
