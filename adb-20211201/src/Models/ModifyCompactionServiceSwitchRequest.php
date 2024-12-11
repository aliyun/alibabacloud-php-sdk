<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ModifyCompactionServiceSwitchRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example amv-bp14t95lun0w****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to enable the remote build feature.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $enableCompactionService;
    protected $_name = [
        'DBClusterId'             => 'DBClusterId',
        'enableCompactionService' => 'EnableCompactionService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enableCompactionService) {
            $res['EnableCompactionService'] = $this->enableCompactionService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCompactionServiceSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EnableCompactionService'])) {
            $model->enableCompactionService = $map['EnableCompactionService'];
        }

        return $model;
    }
}
