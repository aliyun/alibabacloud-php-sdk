<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->insecureRegistries) {
            $res['insecureRegistries'] = $this->insecureRegistries;
        }
        if (null !== $this->registryMirrors) {
            $res['registryMirrors'] = $this->registryMirrors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContainerdConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['insecureRegistries'])) {
            if (!empty($map['insecureRegistries'])) {
                $model->insecureRegistries = $map['insecureRegistries'];
            }
        }
        if (isset($map['registryMirrors'])) {
            if (!empty($map['registryMirrors'])) {
                $model->registryMirrors = $map['registryMirrors'];
            }
        }

        return $model;
    }
}
