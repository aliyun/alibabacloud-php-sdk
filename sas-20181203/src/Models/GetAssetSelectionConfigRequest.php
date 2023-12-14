<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAssetSelectionConfigRequest extends Model
{
    /**
     * @description The feature that is selected for the asset. Valid values:
     *
     *   **VIRUS_SCAN_CYCLE_CONFIG**: virus detection and removal
     *   **VIRUS_SCAN_ONCE_TASK**: one-time scan for viruses
     *   **AGENTLESS_MALICIOUS_WHITE_LIST_\[ID]**: a whitelist rule for alerts that are detected by using the agentless detection feature
     *   **AGENTLESS_VUL_WHITE_LIST_\[ID]**: a whitelist rule for vulnerabilities that are detected by using the agentless detection feature
     *   **FILE_PROTECT_RULE_SWITCH_TYPE_\[ID]**: core file protectioion
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
