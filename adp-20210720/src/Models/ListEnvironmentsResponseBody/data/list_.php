<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentsResponseBody\data;

use AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentsResponseBody\data\list_\platform;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 2022-05-11T00:00:00+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $location;

    /**
     * @example env-demo
     *
     * @var string
     */
    public $name;

    /**
     * @var platform
     */
    public $platform;

    /**
     * @var \AlibabaCloud\SDK\Adp\V20210720\Models\Platform[]
     */
    public $platformList;

    /**
     * @var string
     */
    public $platformStatus;

    /**
     * @example demo-product
     *
     * @var string
     */
    public $productName;

    /**
     * @example v1.0.0
     *
     * @var string
     */
    public $productVersion;

    /**
     * @example fea3185f-027c-484f-9570-xxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @example b8ec63af-7859-4464-9cff-xxx
     *
     * @var string
     */
    public $uid;

    /**
     * @example alicloud
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'createdAt'         => 'createdAt',
        'description'       => 'description',
        'expireAt'          => 'expireAt',
        'instanceStatus'    => 'instanceStatus',
        'location'          => 'location',
        'name'              => 'name',
        'platform'          => 'platform',
        'platformList'      => 'platformList',
        'platformStatus'    => 'platformStatus',
        'productName'       => 'productName',
        'productVersion'    => 'productVersion',
        'productVersionUID' => 'productVersionUID',
        'uid'               => 'uid',
        'vendorType'        => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }
        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->platform) {
            $res['platform'] = null !== $this->platform ? $this->platform->toMap() : null;
        }
        if (null !== $this->platformList) {
            $res['platformList'] = [];
            if (null !== $this->platformList && \is_array($this->platformList)) {
                $n = 0;
                foreach ($this->platformList as $item) {
                    $res['platformList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->platformStatus) {
            $res['platformStatus'] = $this->platformStatus;
        }
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productVersion) {
            $res['productVersion'] = $this->productVersion;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }
        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['platform'])) {
            $model->platform = platform::fromMap($map['platform']);
        }
        if (isset($map['platformList'])) {
            if (!empty($map['platformList'])) {
                $model->platformList = [];
                $n                   = 0;
                foreach ($map['platformList'] as $item) {
                    $model->platformList[$n++] = null !== $item ? \AlibabaCloud\SDK\Adp\V20210720\Models\Platform::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['platformStatus'])) {
            $model->platformStatus = $map['platformStatus'];
        }
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productVersion'])) {
            $model->productVersion = $map['productVersion'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
