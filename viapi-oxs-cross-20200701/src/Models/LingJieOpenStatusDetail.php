<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models;

use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieOpenStatusDetail\apiList;
use AlibabaCloud\Tea\Model;

class LingJieOpenStatusDetail extends Model
{
    /**
     * @var apiList[]
     */
    public $apiList;

    /**
     * @var string
     */
    public $commodityConcurrentLimitTips;

    /**
     * @var bool
     */
    public $commodityHasOpen;

    /**
     * @var string
     */
    public $commodityOpenUrl;

    /**
     * @var string
     */
    public $commodityUsageTips;

    /**
     * @var bool
     */
    public $userStopMode;
    protected $_name = [
        'apiList'                      => 'ApiList',
        'commodityConcurrentLimitTips' => 'CommodityConcurrentLimitTips',
        'commodityHasOpen'             => 'CommodityHasOpen',
        'commodityOpenUrl'             => 'CommodityOpenUrl',
        'commodityUsageTips'           => 'CommodityUsageTips',
        'userStopMode'                 => 'UserStopMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiList) {
            $res['ApiList'] = [];
            if (null !== $this->apiList && \is_array($this->apiList)) {
                $n = 0;
                foreach ($this->apiList as $item) {
                    $res['ApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->commodityConcurrentLimitTips) {
            $res['CommodityConcurrentLimitTips'] = $this->commodityConcurrentLimitTips;
        }
        if (null !== $this->commodityHasOpen) {
            $res['CommodityHasOpen'] = $this->commodityHasOpen;
        }
        if (null !== $this->commodityOpenUrl) {
            $res['CommodityOpenUrl'] = $this->commodityOpenUrl;
        }
        if (null !== $this->commodityUsageTips) {
            $res['CommodityUsageTips'] = $this->commodityUsageTips;
        }
        if (null !== $this->userStopMode) {
            $res['UserStopMode'] = $this->userStopMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LingJieOpenStatusDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n              = 0;
                foreach ($map['ApiList'] as $item) {
                    $model->apiList[$n++] = null !== $item ? apiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CommodityConcurrentLimitTips'])) {
            $model->commodityConcurrentLimitTips = $map['CommodityConcurrentLimitTips'];
        }
        if (isset($map['CommodityHasOpen'])) {
            $model->commodityHasOpen = $map['CommodityHasOpen'];
        }
        if (isset($map['CommodityOpenUrl'])) {
            $model->commodityOpenUrl = $map['CommodityOpenUrl'];
        }
        if (isset($map['CommodityUsageTips'])) {
            $model->commodityUsageTips = $map['CommodityUsageTips'];
        }
        if (isset($map['UserStopMode'])) {
            $model->userStopMode = $map['UserStopMode'];
        }

        return $model;
    }
}
