<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAssetSelectionConfigRequest extends Model
{
    /**
     * @description The business type that you want to select for the asset. Valid values:
     *
     *   **VIRUS_SCAN_CYCLE_CONFIG**: virus detection configuration
     *   **VIRUS_SCAN_ONCE_TASK**: one-time scan for virus detection
     *
     * @example VIRUS_SCAN_CYCLE_CONFIG
     *
     * @var string
     */
    public $businessType;
    protected $_name = [
        'businessType' => 'BusinessType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssetSelectionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        return $model;
    }
}
