<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20180418\Models;

use AlibabaCloud\Tea\Model;

class DescribeKubernetesTemplatesQuery extends Model
{
    /**
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'kubernetesVersion' => 'KubernetesVersion',
        'region'            => 'Region',
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKubernetesTemplatesQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KubernetesVersion'])) {
            $model->kubernetesVersion = $map['KubernetesVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
