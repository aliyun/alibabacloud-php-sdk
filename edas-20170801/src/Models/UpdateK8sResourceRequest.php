<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sResourceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $resourceContent;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'namespace'       => 'Namespace',
        'resourceContent' => 'ResourceContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resourceContent) {
            $res['ResourceContent'] = $this->resourceContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ResourceContent'])) {
            $model->resourceContent = $map['ResourceContent'];
        }

        return $model;
    }
}
