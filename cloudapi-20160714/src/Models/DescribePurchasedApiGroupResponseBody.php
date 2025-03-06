<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupResponseBody\domains;
use AlibabaCloud\Tea\Model;

class DescribePurchasedApiGroupResponseBody extends Model
{
    /**
     * @description The description of the API group.
     *
     * @example api group description
     *
     * @var string
     */
    public $description;

    /**
     * @description The list of domain names.
     *
     * @var domains
     */
    public $domains;

    /**
     * @description The ID of the API group.
     *
     * @example 48977d7b96074966a7c9c2a8872d7e06
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example Weather
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The time when the API group was purchased.
     *
     * @example 2021-12-19T00:00:00
     *
     * @var string
     */
    public $purchasedTime;

    /**
     * @description The region where the API group is located.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 61A16D46-EC04-5288-8A18-811B0F536CC2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the API group.
     *
     *   **NORMAL**: The API group is normal.
     *   **DELETE**: The API group is deleted.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'   => 'Description',
        'domains'       => 'Domains',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'purchasedTime' => 'PurchasedTime',
        'regionId'      => 'RegionId',
        'requestId'     => 'RequestId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domains) {
            $res['Domains'] = null !== $this->domains ? $this->domains->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->purchasedTime) {
            $res['PurchasedTime'] = $this->purchasedTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePurchasedApiGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domains'])) {
            $model->domains = domains::fromMap($map['Domains']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PurchasedTime'])) {
            $model->purchasedTime = $map['PurchasedTime'];
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

        return $model;
    }
}
