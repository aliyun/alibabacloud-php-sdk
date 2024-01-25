<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseRequest;

use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseRequest\licenseQuota\clusterQuota;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateEnvironmentLicenseRequest\licenseQuota\customQuotas;
use AlibabaCloud\Tea\Model;

class licenseQuota extends Model
{
    /**
     * @var clusterQuota
     */
    public $clusterQuota;

    /**
     * @var customQuotas[]
     */
    public $customQuotas;
    protected $_name = [
        'clusterQuota' => 'clusterQuota',
        'customQuotas' => 'customQuotas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterQuota) {
            $res['clusterQuota'] = null !== $this->clusterQuota ? $this->clusterQuota->toMap() : null;
        }
        if (null !== $this->customQuotas) {
            $res['customQuotas'] = [];
            if (null !== $this->customQuotas && \is_array($this->customQuotas)) {
                $n = 0;
                foreach ($this->customQuotas as $item) {
                    $res['customQuotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return licenseQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterQuota'])) {
            $model->clusterQuota = clusterQuota::fromMap($map['clusterQuota']);
        }
        if (isset($map['customQuotas'])) {
            if (!empty($map['customQuotas'])) {
                $model->customQuotas = [];
                $n                   = 0;
                foreach ($map['customQuotas'] as $item) {
                    $model->customQuotas[$n++] = null !== $item ? customQuotas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
