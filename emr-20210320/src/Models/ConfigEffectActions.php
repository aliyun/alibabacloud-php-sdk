<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ConfigEffectActions extends Model
{
    /**
     * @var string
     */
    public $configEffectAction;

    /**
     * @var string[]
     */
    public $configFiles;
    protected $_name = [
        'configEffectAction' => 'ConfigEffectAction',
        'configFiles' => 'ConfigFiles',
    ];

    public function validate()
    {
        if (\is_array($this->configFiles)) {
            Model::validateArray($this->configFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configEffectAction) {
            $res['ConfigEffectAction'] = $this->configEffectAction;
        }

        if (null !== $this->configFiles) {
            if (\is_array($this->configFiles)) {
                $res['ConfigFiles'] = [];
                $n1 = 0;
                foreach ($this->configFiles as $item1) {
                    $res['ConfigFiles'][$n1] = $item1;
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
        if (isset($map['ConfigEffectAction'])) {
            $model->configEffectAction = $map['ConfigEffectAction'];
        }

        if (isset($map['ConfigFiles'])) {
            if (!empty($map['ConfigFiles'])) {
                $model->configFiles = [];
                $n1 = 0;
                foreach ($map['ConfigFiles'] as $item1) {
                    $model->configFiles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
