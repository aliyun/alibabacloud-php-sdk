<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest\customCheckConfig;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest\repairConfigs;

class VerifyCheckCustomConfigRequest extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var customCheckConfig
     */
    public $customCheckConfig;

    /**
     * @var customConfigs[]
     */
    public $customConfigs;

    /**
     * @var repairConfigs[]
     */
    public $repairConfigs;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId' => 'CheckId',
        'customCheckConfig' => 'CustomCheckConfig',
        'customConfigs' => 'CustomConfigs',
        'repairConfigs' => 'RepairConfigs',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->customCheckConfig) {
            $this->customCheckConfig->validate();
        }
        if (\is_array($this->customConfigs)) {
            Model::validateArray($this->customConfigs);
        }
        if (\is_array($this->repairConfigs)) {
            Model::validateArray($this->repairConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->customCheckConfig) {
            $res['CustomCheckConfig'] = null !== $this->customCheckConfig ? $this->customCheckConfig->toArray($noStream) : $this->customCheckConfig;
        }

        if (null !== $this->customConfigs) {
            if (\is_array($this->customConfigs)) {
                $res['CustomConfigs'] = [];
                $n1 = 0;
                foreach ($this->customConfigs as $item1) {
                    $res['CustomConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repairConfigs) {
            if (\is_array($this->repairConfigs)) {
                $res['RepairConfigs'] = [];
                $n1 = 0;
                foreach ($this->repairConfigs as $item1) {
                    $res['RepairConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CustomCheckConfig'])) {
            $model->customCheckConfig = customCheckConfig::fromMap($map['CustomCheckConfig']);
        }

        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n1 = 0;
                foreach ($map['CustomConfigs'] as $item1) {
                    $model->customConfigs[$n1] = customConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RepairConfigs'])) {
            if (!empty($map['RepairConfigs'])) {
                $model->repairConfigs = [];
                $n1 = 0;
                foreach ($map['RepairConfigs'] as $item1) {
                    $model->repairConfigs[$n1] = repairConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
