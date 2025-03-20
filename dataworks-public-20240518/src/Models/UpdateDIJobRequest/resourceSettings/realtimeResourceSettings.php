<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDIJobRequest\resourceSettings;

use AlibabaCloud\Tea\Model;

class realtimeResourceSettings extends Model
{
    /**
     * @description The number of CUs in the resource group for Data Integration that are used for real-time synchronization.
     *
     * @example 2.0
     *
     * @var float
     */
    public $requestedCu;

    /**
     * @description The identifier of the resource group for Data Integration used for real-time synchronization.
     *
     * @example S_res_group_111_222
     *
     * @var string
     */
    public $resourceGroupIdentifier;
    protected $_name = [
        'requestedCu' => 'RequestedCu',
        'resourceGroupIdentifier' => 'ResourceGroupIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestedCu) {
            $res['RequestedCu'] = $this->requestedCu;
        }
        if (null !== $this->resourceGroupIdentifier) {
            $res['ResourceGroupIdentifier'] = $this->resourceGroupIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realtimeResourceSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestedCu'])) {
            $model->requestedCu = $map['RequestedCu'];
        }
        if (isset($map['ResourceGroupIdentifier'])) {
            $model->resourceGroupIdentifier = $map['ResourceGroupIdentifier'];
        }

        return $model;
    }
}
