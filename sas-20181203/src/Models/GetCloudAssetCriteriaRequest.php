<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetCriteriaRequest\cloudAssetTypes;
use AlibabaCloud\Tea\Model;

class GetCloudAssetCriteriaRequest extends Model
{
    /**
     * @description The name of the filter condition. Valid values:
     *
     *   **instanceId**: the ID of the instance
     *   **instanceName**: the name of an instance
     *   **internetIp**: the public IP address
     *   **riskStatus**: the risk status
     *   **vendorRegionId**: the region ID by service provider
     *
     * @var cloudAssetTypes[]
     */
    public $cloudAssetTypes;

    /**
     * @description The type of the filter condition. Valid values:
     *
     *   **input**: The filter condition needs to be specified.
     *   **select**: The filter condition is an option that can be selected from the drop-down list.
     *
     * @example testwww
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cloudAssetTypes' => 'CloudAssetTypes',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssetTypes) {
            $res['CloudAssetTypes'] = [];
            if (null !== $this->cloudAssetTypes && \is_array($this->cloudAssetTypes)) {
                $n = 0;
                foreach ($this->cloudAssetTypes as $item) {
                    $res['CloudAssetTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudAssetCriteriaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssetTypes'])) {
            if (!empty($map['CloudAssetTypes'])) {
                $model->cloudAssetTypes = [];
                $n                      = 0;
                foreach ($map['CloudAssetTypes'] as $item) {
                    $model->cloudAssetTypes[$n++] = null !== $item ? cloudAssetTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
