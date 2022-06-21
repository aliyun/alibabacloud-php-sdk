<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPublicIpAddressPoolsResponseBody\publicIpAddressPoolList\publicIpCidrBlockList;
use AlibabaCloud\Tea\Model;

class publicIpAddressPoolList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $ipAddressRemaining;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @var publicIpCidrBlockList[]
     */
    public $publicIpCidrBlockList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalIpNum;

    /**
     * @var int
     */
    public $usedIpNum;

    /**
     * @var bool
     */
    public $userType;
    protected $_name = [
        'creationTime'          => 'CreationTime',
        'description'           => 'Description',
        'ipAddressRemaining'    => 'IpAddressRemaining',
        'isp'                   => 'Isp',
        'name'                  => 'Name',
        'publicIpAddressPoolId' => 'PublicIpAddressPoolId',
        'publicIpCidrBlockList' => 'PublicIpCidrBlockList',
        'regionId'              => 'RegionId',
        'status'                => 'Status',
        'totalIpNum'            => 'TotalIpNum',
        'usedIpNum'             => 'UsedIpNum',
        'userType'              => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ipAddressRemaining) {
            $res['IpAddressRemaining'] = $this->ipAddressRemaining;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }
        if (null !== $this->publicIpCidrBlockList) {
            $res['PublicIpCidrBlockList'] = [];
            if (null !== $this->publicIpCidrBlockList && \is_array($this->publicIpCidrBlockList)) {
                $n = 0;
                foreach ($this->publicIpCidrBlockList as $item) {
                    $res['PublicIpCidrBlockList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalIpNum) {
            $res['TotalIpNum'] = $this->totalIpNum;
        }
        if (null !== $this->usedIpNum) {
            $res['UsedIpNum'] = $this->usedIpNum;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddressPoolList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IpAddressRemaining'])) {
            $model->ipAddressRemaining = $map['IpAddressRemaining'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }
        if (isset($map['PublicIpCidrBlockList'])) {
            if (!empty($map['PublicIpCidrBlockList'])) {
                $model->publicIpCidrBlockList = [];
                $n                            = 0;
                foreach ($map['PublicIpCidrBlockList'] as $item) {
                    $model->publicIpCidrBlockList[$n++] = null !== $item ? publicIpCidrBlockList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalIpNum'])) {
            $model->totalIpNum = $map['TotalIpNum'];
        }
        if (isset($map['UsedIpNum'])) {
            $model->usedIpNum = $map['UsedIpNum'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
