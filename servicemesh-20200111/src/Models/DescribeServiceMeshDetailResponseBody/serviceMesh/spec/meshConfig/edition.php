<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Dara\Model;

class edition extends Model
{
    /**
     * @var string
     */
    public $istiodImageTag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $proxyImageTag;
    protected $_name = [
        'istiodImageTag' => 'IstiodImageTag',
        'name' => 'Name',
        'proxyImageTag' => 'ProxyImageTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
