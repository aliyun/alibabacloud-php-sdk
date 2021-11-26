<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesResponseBody\anycastList\anycastEipBindInfoList;
use AlibabaCloud\Tea\Model;

class anycastList extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var anycastEipBindInfoList[]
     */
    public $anycastEipBindInfoList;

    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceLocation;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid'                 => 'AliUid',
        'anycastEipBindInfoList' => 'AnycastEipBindInfoList',
        'anycastId'              => 'AnycastId',
        'bandwidth'              => 'Bandwidth',
        'bid'                    => 'Bid',
        'businessStatus'         => 'BusinessStatus',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'instanceChargeType'     => 'InstanceChargeType',
        'internetChargeType'     => 'InternetChargeType',
        'ipAddress'              => 'IpAddress',
        'name'                   => 'Name',
        'serviceLocation'        => 'ServiceLocation',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->anycastEipBindInfoList) {
            $res['AnycastEipBindInfoList'] = [];
            if (null !== $this->anycastEipBindInfoList && \is_array($this->anycastEipBindInfoList)) {
                $n = 0;
                foreach ($this->anycastEipBindInfoList as $item) {
                    $res['AnycastEipBindInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anycastList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AnycastEipBindInfoList'])) {
            if (!empty($map['AnycastEipBindInfoList'])) {
                $model->anycastEipBindInfoList = [];
                $n                             = 0;
                foreach ($map['AnycastEipBindInfoList'] as $item) {
                    $model->anycastEipBindInfoList[$n++] = null !== $item ? anycastEipBindInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
