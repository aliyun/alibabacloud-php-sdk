<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\CreateAssetSelectionConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The business type that is selected for the asset. Valid values:
     *
     *   **VIRUS_SCAN_CYCLE_CONFIG**: virus detection configuration
     *   **VIRUS_SCAN_ONCE_TASK**: one-time scan for virus detection
     *
     * @example VIRUS_SCAN_CYCLE_CONFIG
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The ID of the current asset selection. It can be used to query and modify the asset that is selected.
     *
     * @example 53e93435-d694-4c03-9ce7-da12bee1****
     *
     * @var int
     */
    public $selectionKey;

    /**
     * @description The dimension based on which the asset is selected. Valid values:
     *
     *   **group**: The asset is selected by server.
     *   **group**: The asset is selected by group.
     *   **vpc**: The asset is selected by VPC.
     *
     * @example group
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'businessType' => 'BusinessType',
        'selectionKey' => 'SelectionKey',
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
        if (null !== $this->selectionKey) {
            $res['SelectionKey'] = $this->selectionKey;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['SelectionKey'])) {
            $model->selectionKey = $map['SelectionKey'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
