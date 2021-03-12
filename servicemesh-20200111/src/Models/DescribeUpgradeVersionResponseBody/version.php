<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeUpgradeVersionResponseBody;

use AlibabaCloud\Tea\Model;

class version extends Model
{
    /**
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @var string
     */
    public $istioOperatorVersion;

    /**
     * @var string
     */
    public $istioVersion;
    protected $_name = [
        'kubernetesVersion'    => 'KubernetesVersion',
        'istioOperatorVersion' => 'IstioOperatorVersion',
        'istioVersion'         => 'IstioVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kubernetesVersion) {
            $res['KubernetesVersion'] = $this->kubernetesVersion;
        }
        if (null !== $this->istioOperatorVersion) {
            $res['IstioOperatorVersion'] = $this->istioOperatorVersion;
        }
        if (null !== $this->istioVersion) {
            $res['IstioVersion'] = $this->istioVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return version
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KubernetesVersion'])) {
            $model->kubernetesVersion = $map['KubernetesVersion'];
        }
        if (isset($map['IstioOperatorVersion'])) {
            $model->istioOperatorVersion = $map['IstioOperatorVersion'];
        }
        if (isset($map['IstioVersion'])) {
            $model->istioVersion = $map['IstioVersion'];
        }

        return $model;
    }
}
