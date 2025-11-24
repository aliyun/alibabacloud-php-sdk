<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
