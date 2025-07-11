<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\deploymentPolicy;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @var bool
     */
    public $enableENIMapping;

    /**
     * @var bool
     */
    public $enableExternalIpAddress;

    /**
     * @var string[]
     */
    public $vswitch;
    protected $_name = [
        'enableENIMapping' => 'EnableENIMapping',
        'enableExternalIpAddress' => 'EnableExternalIpAddress',
        'vswitch' => 'Vswitch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableENIMapping) {
            $res['EnableENIMapping'] = $this->enableENIMapping;
        }
        if (null !== $this->enableExternalIpAddress) {
            $res['EnableExternalIpAddress'] = $this->enableExternalIpAddress;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableENIMapping'])) {
            $model->enableENIMapping = $map['EnableENIMapping'];
        }
        if (isset($map['EnableExternalIpAddress'])) {
            $model->enableExternalIpAddress = $map['EnableExternalIpAddress'];
        }
        if (isset($map['Vswitch'])) {
            if (!empty($map['Vswitch'])) {
                $model->vswitch = $map['Vswitch'];
            }
        }

        return $model;
    }
}
