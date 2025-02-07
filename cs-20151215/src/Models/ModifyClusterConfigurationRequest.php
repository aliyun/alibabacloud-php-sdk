<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest\customizeConfig;

class ModifyClusterConfigurationRequest extends Model
{
    /**
     * @var customizeConfig[]
     */
    public $customizeConfig;
    protected $_name = [
        'customizeConfig' => 'customize_config',
    ];

    public function validate()
    {
        if (\is_array($this->customizeConfig)) {
            Model::validateArray($this->customizeConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customizeConfig) {
            if (\is_array($this->customizeConfig)) {
                $res['customize_config'] = [];
                $n1                      = 0;
                foreach ($this->customizeConfig as $item1) {
                    $res['customize_config'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['customize_config'])) {
            if (!empty($map['customize_config'])) {
                $model->customizeConfig = [];
                $n1                     = 0;
                foreach ($map['customize_config'] as $item1) {
                    $model->customizeConfig[$n1++] = customizeConfig::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
