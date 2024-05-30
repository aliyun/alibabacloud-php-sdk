<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCloudVendorRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The area to which the region belongs. The valid values vary based on the value of the Vendor parameter.
     *
     *   Valid values if **Vendor** is set to Tencent:
     *   **cn**: China
     *   **southeast_asia**: Southeast Asia Pacific
     *   **northeast_asia**: Northeast Asia Pacific
     *   **southern_asia**: South Asia Pacific
     *   **north_America**: North America
     *   **south_America**: South America
     *   **western_America**: Western United States
     *   **eastern_America**: Eastern United States
     *   **european**: Europe
     *   Valid values if **Vendor** is set to HUAWEICLOUD:
     *   **cn**: China
     *   **africa**: Africa
     *   **latin_america**: Latin America
     *   **asia**: Asia Pacific
     *   Valid values if **Vendor** is set to Azure:
     *   **middle_east**: Middle East
     *   **south_america**: South America
     *   **canada**: Canada
     *   **asia-pacific**: Asia Pacific
     *   **europe**: Europe
     *   **africa**: Africa
     *   **us**: United States
     *   **other**: other regions
     *   Valid values if **Vendor** is set to AWS:
     *   **cn**: China
     *   **us**: United States
     *   **eu**: Europe
     *   **asia**: Asia Pacific
     *   **south_america**: South America
     *   **me**: Middle East
     *   **ca**: Canada
     *   **af**: Africa
     *
     * @example cn
     *
     * @var string
     */
    public $area;

    /**
     * @description Indicates whether the region is configured as a synchronization region on another site. Valid values:
     *
     *   **0**: The region is not configured as a synchronization region on another site.
     *   **1**: The region is configured as a synchronization region on another site.
     *
     * @example 1
     *
     * @var int
     */
    public $disable;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the region is configured as a synchronization region on this site. Valid values:
     *
     *   **0**: The region is not configured as a synchronization region on this site.
     *   **1**: The region is configured as a synchronization region on this site.
     *
     * @example 0
     *
     * @var int
     */
    public $selected;
    protected $_name = [
        'area'     => 'Area',
        'disable'  => 'Disable',
        'regionId' => 'RegionId',
        'selected' => 'Selected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
