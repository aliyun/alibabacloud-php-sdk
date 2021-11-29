<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request\hostComponentInfo;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request\hostGroup;
use AlibabaCloud\SDK\Emr\V20160408\Models\ResizeClusterV2Request\promotionInfo;
use AlibabaCloud\Tea\Model;

class ResizeClusterV2Request extends Model
{
    /**
     * @var bool
     */
    public $autoPayOrder;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var hostComponentInfo[]
     */
    public $hostComponentInfo;

    /**
     * @var hostGroup[]
     */
    public $hostGroup;

    /**
     * @var bool
     */
    public $isOpenPublicIp;

    /**
     * @var promotionInfo[]
     */
    public $promotionInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'autoPayOrder'      => 'AutoPayOrder',
        'clusterId'         => 'ClusterId',
        'hostComponentInfo' => 'HostComponentInfo',
        'hostGroup'         => 'HostGroup',
        'isOpenPublicIp'    => 'IsOpenPublicIp',
        'promotionInfo'     => 'PromotionInfo',
        'regionId'          => 'RegionId',
        'vswitchId'         => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPayOrder) {
            $res['AutoPayOrder'] = $this->autoPayOrder;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostComponentInfo) {
            $res['HostComponentInfo'] = [];
            if (null !== $this->hostComponentInfo && \is_array($this->hostComponentInfo)) {
                $n = 0;
                foreach ($this->hostComponentInfo as $item) {
                    $res['HostComponentInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostGroup) {
            $res['HostGroup'] = [];
            if (null !== $this->hostGroup && \is_array($this->hostGroup)) {
                $n = 0;
                foreach ($this->hostGroup as $item) {
                    $res['HostGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isOpenPublicIp) {
            $res['IsOpenPublicIp'] = $this->isOpenPublicIp;
        }
        if (null !== $this->promotionInfo) {
            $res['PromotionInfo'] = [];
            if (null !== $this->promotionInfo && \is_array($this->promotionInfo)) {
                $n = 0;
                foreach ($this->promotionInfo as $item) {
                    $res['PromotionInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeClusterV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPayOrder'])) {
            $model->autoPayOrder = $map['AutoPayOrder'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostComponentInfo'])) {
            if (!empty($map['HostComponentInfo'])) {
                $model->hostComponentInfo = [];
                $n                        = 0;
                foreach ($map['HostComponentInfo'] as $item) {
                    $model->hostComponentInfo[$n++] = null !== $item ? hostComponentInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostGroup'])) {
            if (!empty($map['HostGroup'])) {
                $model->hostGroup = [];
                $n                = 0;
                foreach ($map['HostGroup'] as $item) {
                    $model->hostGroup[$n++] = null !== $item ? hostGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsOpenPublicIp'])) {
            $model->isOpenPublicIp = $map['IsOpenPublicIp'];
        }
        if (isset($map['PromotionInfo'])) {
            if (!empty($map['PromotionInfo'])) {
                $model->promotionInfo = [];
                $n                    = 0;
                foreach ($map['PromotionInfo'] as $item) {
                    $model->promotionInfo[$n++] = null !== $item ? promotionInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
