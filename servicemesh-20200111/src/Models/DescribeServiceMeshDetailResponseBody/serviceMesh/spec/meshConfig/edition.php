<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class edition extends Model
{
    /**
     * @description The version of the Istiod image.
     *
     * @example v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun
     *
     * @var string
     */
    public $istiodImageTag;

    /**
     * @description The name of the edition.
     *
     * @example Pro
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the Istio Proxy image.
     *
     * @example v1.9.7.1-3-gb3f1ab3c9c-pro-aliyun
     *
     * @var string
     */
    public $proxyImageTag;
    protected $_name = [
        'istiodImageTag' => 'IstiodImageTag',
        'name'           => 'Name',
        'proxyImageTag'  => 'ProxyImageTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->istiodImageTag) {
            $res['IstiodImageTag'] = $this->istiodImageTag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->proxyImageTag) {
            $res['ProxyImageTag'] = $this->proxyImageTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IstiodImageTag'])) {
            $model->istiodImageTag = $map['IstiodImageTag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProxyImageTag'])) {
            $model->proxyImageTag = $map['ProxyImageTag'];
        }

        return $model;
    }
}
