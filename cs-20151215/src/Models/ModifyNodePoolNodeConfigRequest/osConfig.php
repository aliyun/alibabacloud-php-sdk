<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyNodePoolNodeConfigRequest;

use AlibabaCloud\Tea\Model;

class osConfig extends Model
{
    /**
     * @var mixed[]
     */
    public $sysctl;
    protected $_name = [
        'sysctl' => 'sysctl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sysctl) {
            $res['sysctl'] = $this->sysctl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sysctl'])) {
            $model->sysctl = $map['sysctl'];
        }

        return $model;
    }
}
