<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListPodsOfInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example test-pod
     *
     * @var string
     */
    public $pod;
    protected $_name = [
        'namespace' => 'namespace',
        'pod' => 'pod',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->pod) {
            $res['pod'] = $this->pod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['pod'])) {
            $model->pod = $map['pod'];
        }

        return $model;
    }
}
