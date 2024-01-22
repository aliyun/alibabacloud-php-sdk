<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeRegionsResponseBody\regions\region\recommendZones;
use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @description The list of regions.
     *
     * @var string
     */
    public $localName;

    /**
     * @description The ID of the region. Valid values:
     *
     *   **cn-hangzhou**: the ID of the China (Hangzhou) region
     *   **cn-shanghai**: the ID of the China (Shanghai) region
     *   **cn-beijing**: the ID of the China (Beijing) region
     *   **cn-zhangjiakou**: the ID of the China (Zhangjiakou) region
     *   **cn-shenzhen**: the ID of the China (Shenzhen) region
     *   **cn-guangzhou**: the ID of the China (Guangzhou) region
     *   **cn-hongkong**: the ID of the China (Hong Kong) region
     *   **ap-southeast-1**: the ID of the Singapore region
     *   **us-west-1**: the ID of the US (Silicon Valley) region
     *
     * @var recommendZones
     */
    public $recommendZones;

    /**
     * @description The name of the region. Valid values:
     *
     *   **China (Hangzhou)**
     *   **China (Shanghai)**
     *   **China (Beijing)**
     *   **China (Zhangjiakou)**
     *   **China (Shenzhen)**
     *   **China (Guangzhou)**
     *   **China (Hong Kong)**
     *   **Singapore (Singapore)**
     *   **US (Silicon Valley)**
     *
     * @example sae.cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $regionEndpoint;

    /**
     * @description The endpoint of the region. Valid values:
     *
     *   **sae.cn-hangzhou.aliyuncs.com**
     *   **sae.cn-shanghai.aliyuncs.com**
     *   **sae.cn-beijing.aliyuncs.com**
     *   **sae.cn-zhangjiakou.aliyuncs.com**
     *   **sae.cn-shenzhen.aliyuncs.com**
     *   **sae.cn-guangzhou.aliyuncs.com**
     *   **sae.cn-hongkong.aliyuncs.com**
     *   **sae.ap-southeast-1.aliyuncs.com**
     *   **sae.us-west-1.aliyuncs.com**
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'localName'      => 'LocalName',
        'recommendZones' => 'RecommendZones',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->recommendZones) {
            $res['RecommendZones'] = null !== $this->recommendZones ? $this->recommendZones->toMap() : null;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['RecommendZones'])) {
            $model->recommendZones = recommendZones::fromMap($map['RecommendZones']);
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
