<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ContainerdConfig extends Model
{
    /**
     * @var string[]
     */
    public $insecureRegistries;

    /**
     * @var string[]
     */
    public $registryMirrors;
    protected $_name = [
        'insecureRegistries' => 'insecureRegistries',
        'registryMirrors' => 'registryMirrors',
    ];

    public function validate()
    {
        if (\is_array($this->insecureRegistries)) {
            Model::validateArray($this->insecureRegistries);
        }
        if (\is_array($this->registryMirrors)) {
            Model::validateArray($this->registryMirrors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insecureRegistries) {
            if (\is_array($this->insecureRegistries)) {
                $res['insecureRegistries'] = [];
                $n1 = 0;
                foreach ($this->insecureRegistries as $item1) {
                    $res['insecureRegistries'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->registryMirrors) {
            if (\is_array($this->registryMirrors)) {
                $res['registryMirrors'] = [];
                $n1 = 0;
                foreach ($this->registryMirrors as $item1) {
                    $res['registryMirrors'][$n1++] = $item1;
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
        if (isset($map['insecureRegistries'])) {
            if (!empty($map['insecureRegistries'])) {
                $model->insecureRegistries = [];
                $n1 = 0;
                foreach ($map['insecureRegistries'] as $item1) {
                    $model->insecureRegistries[$n1++] = $item1;
                }
            }
        }

        if (isset($map['registryMirrors'])) {
            if (!empty($map['registryMirrors'])) {
                $model->registryMirrors = [];
                $n1 = 0;
                foreach ($map['registryMirrors'] as $item1) {
                    $model->registryMirrors[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
