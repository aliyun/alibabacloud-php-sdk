<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\hostSecurityContext\sysctl;
use AlibabaCloud\Tea\Model;

class hostSecurityContext extends Model
{
    /**
     * @description Configure a security context to modify unsafe sysctls. For more information, see [Configure a security context](~~462313~~).
     *
     * @var sysctl[]
     */
    public $sysctl;
    protected $_name = [
        'sysctl' => 'Sysctl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sysctl) {
            $res['Sysctl'] = [];
            if (null !== $this->sysctl && \is_array($this->sysctl)) {
                $n = 0;
                foreach ($this->sysctl as $item) {
                    $res['Sysctl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostSecurityContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sysctl'])) {
            if (!empty($map['Sysctl'])) {
                $model->sysctl = [];
                $n             = 0;
                foreach ($map['Sysctl'] as $item) {
                    $model->sysctl[$n++] = null !== $item ? sysctl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
