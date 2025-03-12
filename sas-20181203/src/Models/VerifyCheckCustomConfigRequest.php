<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest\repairConfigs;
use AlibabaCloud\Tea\Model;

class VerifyCheckCustomConfigRequest extends Model
{
    /**
     * @description Check item ID.
     *
     * @example 76
     *
     * @var int
     */
    public $checkId;

    /**
     * @description List of custom configuration items for the check item.
     *
     * @var customConfigs[]
     */
    public $customConfigs;

    /**
     * @description Repair parameters supported by the check item\\"s repair function.
     *
     * @var repairConfigs[]
     */
    public $repairConfigs;
    protected $_name = [
        'checkId'       => 'CheckId',
        'customConfigs' => 'CustomConfigs',
        'repairConfigs' => 'RepairConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->customConfigs) {
            $res['CustomConfigs'] = [];
            if (null !== $this->customConfigs && \is_array($this->customConfigs)) {
                $n = 0;
                foreach ($this->customConfigs as $item) {
                    $res['CustomConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->repairConfigs) {
            $res['RepairConfigs'] = [];
            if (null !== $this->repairConfigs && \is_array($this->repairConfigs)) {
                $n = 0;
                foreach ($this->repairConfigs as $item) {
                    $res['RepairConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCheckCustomConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n                    = 0;
                foreach ($map['CustomConfigs'] as $item) {
                    $model->customConfigs[$n++] = null !== $item ? customConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RepairConfigs'])) {
            if (!empty($map['RepairConfigs'])) {
                $model->repairConfigs = [];
                $n                    = 0;
                foreach ($map['RepairConfigs'] as $item) {
                    $model->repairConfigs[$n++] = null !== $item ? repairConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
