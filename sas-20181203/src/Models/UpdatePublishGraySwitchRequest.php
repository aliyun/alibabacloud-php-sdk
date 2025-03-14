<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdatePublishGraySwitchRequest extends Model
{
    /**
     * @description Specifies whether to enable the canary release feature. Valid values:
     *
     *   **1**: enabled.
     *   **0**: disabled.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $graySwitchStatus;
    protected $_name = [
        'graySwitchStatus' => 'GraySwitchStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->graySwitchStatus) {
            $res['GraySwitchStatus'] = $this->graySwitchStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePublishGraySwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GraySwitchStatus'])) {
            $model->graySwitchStatus = $map['GraySwitchStatus'];
        }

        return $model;
    }
}
