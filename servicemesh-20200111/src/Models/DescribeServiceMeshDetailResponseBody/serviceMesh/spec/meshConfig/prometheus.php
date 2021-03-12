<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class prometheus extends Model
{
    /**
     * @var bool
     */
    public $useExternal;

    /**
     * @var string
     */
    public $externalUrl;
    protected $_name = [
        'useExternal' => 'UseExternal',
        'externalUrl' => 'ExternalUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->useExternal) {
            $res['UseExternal'] = $this->useExternal;
        }
        if (null !== $this->externalUrl) {
            $res['ExternalUrl'] = $this->externalUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prometheus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UseExternal'])) {
            $model->useExternal = $map['UseExternal'];
        }
        if (isset($map['ExternalUrl'])) {
            $model->externalUrl = $map['ExternalUrl'];
        }

        return $model;
    }
}
