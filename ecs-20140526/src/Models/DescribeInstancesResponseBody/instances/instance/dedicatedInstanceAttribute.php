<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class dedicatedInstanceAttribute extends Model
{
    /**
     * @description Indicates whether the instance on the dedicated host is associated with the dedicated host. Valid values:
     *
     *   default: The instance is not associated with the dedicated host. When the instance is restarted from economical mode, the instance may be automatically deployed on another dedicated host in the automatic deployment resource pool.
     *   host: The instance is associated with the dedicated host. When the instance is restarted from economical mode, the instance is still deployed on the original dedicated host.
     *
     * @example default
     *
     * @var string
     */
    public $affinity;

    /**
     * @description Indicates whether the instance is hosted on a dedicated host. Valid values:
     *
     *   default: The instance is not hosted on a dedicated host.
     *   host: The instance is hosted on a dedicated host.
     *
     * @example default
     *
     * @var string
     */
    public $tenancy;
    protected $_name = [
        'affinity' => 'Affinity',
        'tenancy'  => 'Tenancy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }
        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedInstanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }
        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }

        return $model;
    }
}
