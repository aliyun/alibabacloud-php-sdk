<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class prometheus extends Model
{
    /**
     * @var string
     */
    public $externalUrl;

    /**
     * @var bool
     */
    public $useExternal;
    protected $_name = [
        'externalUrl' => 'ExternalUrl',
        'useExternal' => 'UseExternal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalUrl) {
            $res['ExternalUrl'] = $this->externalUrl;
        }
        if (null !== $this->useExternal) {
            $res['UseExternal'] = $this->useExternal;
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
        if (isset($map['ExternalUrl'])) {
            $model->externalUrl = $map['ExternalUrl'];
        }
        if (isset($map['UseExternal'])) {
            $model->useExternal = $map['UseExternal'];
        }

        return $model;
    }
}
