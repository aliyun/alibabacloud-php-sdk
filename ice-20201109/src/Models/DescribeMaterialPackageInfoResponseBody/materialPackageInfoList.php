<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMaterialPackageInfoResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMaterialPackageInfoResponseBody\materialPackageInfoList\materialPackagePurchaseList;
use AlibabaCloud\Tea\Model;

class materialPackageInfoList extends Model
{
    /**
     * @var string
     */
    public $authTime;

    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $displayPrice;

    /**
     * @var string
     */
    public $initCapacity;

    /**
     * @var int
     */
    public $materialCount;

    /**
     * @var string
     */
    public $materialPackageId;

    /**
     * @var materialPackagePurchaseList[]
     */
    public $materialPackagePurchaseList;
    protected $_name = [
        'authTime'                    => 'AuthTime',
        'authorized'                  => 'Authorized',
        'displayPrice'                => 'DisplayPrice',
        'initCapacity'                => 'InitCapacity',
        'materialCount'               => 'MaterialCount',
        'materialPackageId'           => 'MaterialPackageId',
        'materialPackagePurchaseList' => 'MaterialPackagePurchaseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authTime) {
            $res['AuthTime'] = $this->authTime;
        }
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }
        if (null !== $this->displayPrice) {
            $res['DisplayPrice'] = $this->displayPrice;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->materialCount) {
            $res['MaterialCount'] = $this->materialCount;
        }
        if (null !== $this->materialPackageId) {
            $res['MaterialPackageId'] = $this->materialPackageId;
        }
        if (null !== $this->materialPackagePurchaseList) {
            $res['MaterialPackagePurchaseList'] = [];
            if (null !== $this->materialPackagePurchaseList && \is_array($this->materialPackagePurchaseList)) {
                $n = 0;
                foreach ($this->materialPackagePurchaseList as $item) {
                    $res['MaterialPackagePurchaseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return materialPackageInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthTime'])) {
            $model->authTime = $map['AuthTime'];
        }
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }
        if (isset($map['DisplayPrice'])) {
            $model->displayPrice = $map['DisplayPrice'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['MaterialCount'])) {
            $model->materialCount = $map['MaterialCount'];
        }
        if (isset($map['MaterialPackageId'])) {
            $model->materialPackageId = $map['MaterialPackageId'];
        }
        if (isset($map['MaterialPackagePurchaseList'])) {
            if (!empty($map['MaterialPackagePurchaseList'])) {
                $model->materialPackagePurchaseList = [];
                $n                                  = 0;
                foreach ($map['MaterialPackagePurchaseList'] as $item) {
                    $model->materialPackagePurchaseList[$n++] = null !== $item ? materialPackagePurchaseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
