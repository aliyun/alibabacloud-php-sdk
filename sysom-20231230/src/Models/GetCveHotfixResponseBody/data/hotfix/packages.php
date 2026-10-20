<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetCveHotfixResponseBody\data\hotfix;

use AlibabaCloud\Dara\Model;

class packages extends Model
{
    /**
     * @var string
     */
    public $arch;

    /**
     * @var string
     */
    public $distro;

    /**
     * @var string
     */
    public $kernelVersion;

    /**
     * @var string
     */
    public $rpmNevra;
    protected $_name = [
        'arch' => 'arch',
        'distro' => 'distro',
        'kernelVersion' => 'kernelVersion',
        'rpmNevra' => 'rpmNevra',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arch) {
            $res['arch'] = $this->arch;
        }

        if (null !== $this->distro) {
            $res['distro'] = $this->distro;
        }

        if (null !== $this->kernelVersion) {
            $res['kernelVersion'] = $this->kernelVersion;
        }

        if (null !== $this->rpmNevra) {
            $res['rpmNevra'] = $this->rpmNevra;
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
        if (isset($map['arch'])) {
            $model->arch = $map['arch'];
        }

        if (isset($map['distro'])) {
            $model->distro = $map['distro'];
        }

        if (isset($map['kernelVersion'])) {
            $model->kernelVersion = $map['kernelVersion'];
        }

        if (isset($map['rpmNevra'])) {
            $model->rpmNevra = $map['rpmNevra'];
        }

        return $model;
    }
}
