<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListLicensesRequest\orders;

class ListLicensesRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var bool
     */
    public $needTotalCount;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var orders[]
     */
    public $orders;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var int
     */
    public $platformType;

    /**
     * @var string
     */
    public $product;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'businessType' => 'BusinessType',
        'needTotalCount' => 'NeedTotalCount',
        'offset' => 'Offset',
        'orders' => 'Orders',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'pkgName' => 'PkgName',
        'platformType' => 'PlatformType',
        'product' => 'Product',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->orders)) {
            Model::validateArray($this->orders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->needTotalCount) {
            $res['NeedTotalCount'] = $this->needTotalCount;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->orders) {
            if (\is_array($this->orders)) {
                $res['Orders'] = [];
                $n1 = 0;
                foreach ($this->orders as $item1) {
                    $res['Orders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }

        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['NeedTotalCount'])) {
            $model->needTotalCount = $map['NeedTotalCount'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['Orders'])) {
            if (!empty($map['Orders'])) {
                $model->orders = [];
                $n1 = 0;
                foreach ($map['Orders'] as $item1) {
                    $model->orders[$n1] = orders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }

        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
