<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiGroupDetailForConsumerResponseBody\domainItems;
use AlibabaCloud\Tea\Model;

class DescribeApiGroupDetailForConsumerResponseBody extends Model
{
    /**
     * @var string
     */
    public $billingStatus;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var domainItems
     */
    public $domainItems;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $illegalStatus;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $purchased;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var int
     */
    public $trafficLimit;
    protected $_name = [
        'billingStatus' => 'BillingStatus',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'domainItems'   => 'DomainItems',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'illegalStatus' => 'IllegalStatus',
        'modifiedTime'  => 'ModifiedTime',
        'purchased'     => 'Purchased',
        'regionId'      => 'RegionId',
        'requestId'     => 'RequestId',
        'status'        => 'Status',
        'subDomain'     => 'SubDomain',
        'trafficLimit'  => 'TrafficLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingStatus) {
            $res['BillingStatus'] = $this->billingStatus;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domainItems) {
            $res['DomainItems'] = null !== $this->domainItems ? $this->domainItems->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->illegalStatus) {
            $res['IllegalStatus'] = $this->illegalStatus;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->purchased) {
            $res['Purchased'] = $this->purchased;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->trafficLimit) {
            $res['TrafficLimit'] = $this->trafficLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiGroupDetailForConsumerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingStatus'])) {
            $model->billingStatus = $map['BillingStatus'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DomainItems'])) {
            $model->domainItems = domainItems::fromMap($map['DomainItems']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IllegalStatus'])) {
            $model->illegalStatus = $map['IllegalStatus'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Purchased'])) {
            $model->purchased = $map['Purchased'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['TrafficLimit'])) {
            $model->trafficLimit = $map['TrafficLimit'];
        }

        return $model;
    }
}
