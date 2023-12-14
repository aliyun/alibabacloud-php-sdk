<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateAssetSelectionConfigRequest extends Model
{
    /**
     * @description The feature that you want to select for the asset. Valid values:
     *
     *   **VIRUS_SCAN_CYCLE_CONFIG**: virus detection and removal
     *   **VIRUS_SCAN_ONCE_TASK**: one-time scan for viruses
     *   **AGENTLESS_MALICIOUS_WHITE_LIST_\[ID]**: a whitelist rule for alerts that are detected by using the agentless detection feature
     *   **AGENTLESS_VUL_WHITE_LIST_\[ID]**: a whitelist rule for vulnerabilities that are detected by using the agentless detection feature
     *   **FILE_PROTECT_RULE_SWITCH_TYPE_\[ID]**: core file protection
     *
     * @example VIRUS_SCAN_CYCLE_CONFIG
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The dimension based on which you want to select the asset. Valid values:
     *
     *   **instance**: selects the asset by server.
     *   **group**: selects the asset by group.
     *   **vpc**: selects the asset by virtual private cloud (VPC).
     *
     * @example vpc
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'businessType' => 'BusinessType',
        'targetType'   => 'TargetType',
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
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAssetSelectionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
