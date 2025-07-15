<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ResetAndroidInstancesInGroupRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances.
     *
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var string
     */
    public $saleMode;

    /**
     * @var int
     */
    public $settingResetType;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'saleMode' => 'SaleMode',
        'settingResetType' => 'SettingResetType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }
        if (null !== $this->settingResetType) {
            $res['SettingResetType'] = $this->settingResetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetAndroidInstancesInGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }
        if (isset($map['SettingResetType'])) {
            $model->settingResetType = $map['SettingResetType'];
        }

        return $model;
    }
}
