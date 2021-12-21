<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListMainVersionsResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListMainVersionsResponseBody\mainVersionList\clusterTypeInfoList;
use AlibabaCloud\Tea\Model;

class mainVersionList extends Model
{
    /**
     * @var clusterTypeInfoList[]
     */
    public $clusterTypeInfoList;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $mainVersionName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterTypeInfoList' => 'ClusterTypeInfoList',
        'extraInfo'           => 'ExtraInfo',
        'mainVersionName'     => 'MainVersionName',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypeInfoList) {
            $res['ClusterTypeInfoList'] = [];
            if (null !== $this->clusterTypeInfoList && \is_array($this->clusterTypeInfoList)) {
                $n = 0;
                foreach ($this->clusterTypeInfoList as $item) {
                    $res['ClusterTypeInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->mainVersionName) {
            $res['MainVersionName'] = $this->mainVersionName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mainVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypeInfoList'])) {
            if (!empty($map['ClusterTypeInfoList'])) {
                $model->clusterTypeInfoList = [];
                $n                          = 0;
                foreach ($map['ClusterTypeInfoList'] as $item) {
                    $model->clusterTypeInfoList[$n++] = null !== $item ? clusterTypeInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['MainVersionName'])) {
            $model->mainVersionName = $map['MainVersionName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
