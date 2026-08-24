<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ConfigSetListResponseBody\configSets;

use AlibabaCloud\Dara\Model;

class validationOption extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $forbiddenStatusList;

    /**
     * @var string[]
     */
    public $forbiddenSubStatusList;
    protected $_name = [
        'enabled' => 'Enabled',
        'forbiddenStatusList' => 'ForbiddenStatusList',
        'forbiddenSubStatusList' => 'ForbiddenSubStatusList',
    ];

    public function validate()
    {
        if (\is_array($this->forbiddenStatusList)) {
            Model::validateArray($this->forbiddenStatusList);
        }
        if (\is_array($this->forbiddenSubStatusList)) {
            Model::validateArray($this->forbiddenSubStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->forbiddenStatusList) {
            if (\is_array($this->forbiddenStatusList)) {
                $res['ForbiddenStatusList'] = [];
                $n1 = 0;
                foreach ($this->forbiddenStatusList as $item1) {
                    $res['ForbiddenStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->forbiddenSubStatusList) {
            if (\is_array($this->forbiddenSubStatusList)) {
                $res['ForbiddenSubStatusList'] = [];
                $n1 = 0;
                foreach ($this->forbiddenSubStatusList as $item1) {
                    $res['ForbiddenSubStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['ForbiddenStatusList'])) {
            if (!empty($map['ForbiddenStatusList'])) {
                $model->forbiddenStatusList = [];
                $n1 = 0;
                foreach ($map['ForbiddenStatusList'] as $item1) {
                    $model->forbiddenStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ForbiddenSubStatusList'])) {
            if (!empty($map['ForbiddenSubStatusList'])) {
                $model->forbiddenSubStatusList = [];
                $n1 = 0;
                foreach ($map['ForbiddenSubStatusList'] as $item1) {
                    $model->forbiddenSubStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
