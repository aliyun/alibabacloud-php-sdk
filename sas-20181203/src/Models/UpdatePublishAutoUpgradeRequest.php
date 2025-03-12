<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdatePublishAutoUpgradeRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic upgrade. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $autoUpgrade;
    protected $_name = [
        'autoUpgrade' => 'AutoUpgrade',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpgrade) {
            $res['AutoUpgrade'] = $this->autoUpgrade;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePublishAutoUpgradeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoUpgrade'])) {
            $model->autoUpgrade = $map['AutoUpgrade'];
        }

        return $model;
    }
}
