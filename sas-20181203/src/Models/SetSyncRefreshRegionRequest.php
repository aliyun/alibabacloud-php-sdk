<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetSyncRefreshRegionRequest extends Model
{
    /**
     * @description The access type of the multi-cloud site. Valid values:
     *
     *   **0**: The current site is not the default site of multi-cloud site. You can specify the current site as the default site of the multi-cloud site.
     *   **1**: The current site is the default site of multi-cloud site.
     *
     * @example 0
     *
     * @var int
     */
    public $defaultRegion;

    /**
     * @description The regions from which you want to synchronize assets at the current site.
     *
     * @var string[]
     */
    public $regionIds;

    /**
     * @description The cloud service provider. Valid values:
     *
     *   **Tencent**: Tencent Cloud
     *   **HUAWEICLOUD**: Huawei Cloud
     *   **Azure**: Microsoft Azure
     *   **AWS**: Amazon Web Services (AWS)
     *
     * @example Tencent
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'defaultRegion' => 'DefaultRegion',
        'regionIds'     => 'RegionIds',
        'vendor'        => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultRegion) {
            $res['DefaultRegion'] = $this->defaultRegion;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSyncRefreshRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultRegion'])) {
            $model->defaultRegion = $map['DefaultRegion'];
        }
        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = $map['RegionIds'];
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
