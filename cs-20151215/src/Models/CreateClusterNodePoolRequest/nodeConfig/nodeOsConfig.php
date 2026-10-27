<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\nodeConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\Hugepage;

class nodeOsConfig extends Model
{
    /**
     * @var Hugepage
     */
    public $hugepage;

    /**
     * @var mixed[]
     */
    public $sysctl;
    protected $_name = [
        'hugepage' => 'hugepage',
        'sysctl' => 'sysctl',
    ];

    public function validate()
    {
        if (null !== $this->hugepage) {
            $this->hugepage->validate();
        }
        if (\is_array($this->sysctl)) {
            Model::validateArray($this->sysctl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hugepage) {
            $res['hugepage'] = null !== $this->hugepage ? $this->hugepage->toArray($noStream) : $this->hugepage;
        }

        if (null !== $this->sysctl) {
            if (\is_array($this->sysctl)) {
                $res['sysctl'] = [];
                foreach ($this->sysctl as $key1 => $value1) {
                    $res['sysctl'][$key1] = $value1;
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
        if (isset($map['hugepage'])) {
            $model->hugepage = Hugepage::fromMap($map['hugepage']);
        }

        if (isset($map['sysctl'])) {
            if (!empty($map['sysctl'])) {
                $model->sysctl = [];
                foreach ($map['sysctl'] as $key1 => $value1) {
                    $model->sysctl[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
