<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListEnvironmentLicensesResponseBody\data\list_\licenseQuota;

use AlibabaCloud\Tea\Model;

class clusterQuota extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $cpuCoreLimit;
    protected $_name = [
        'cpuCoreLimit' => 'cpuCoreLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuCoreLimit) {
            $res['cpuCoreLimit'] = $this->cpuCoreLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpuCoreLimit'])) {
            $model->cpuCoreLimit = $map['cpuCoreLimit'];
        }

        return $model;
    }
}
