<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListK8sNamespacesRequest extends Model
{
    /**
     * @description The ID of the cluster in Enterprise Distributed Application Service (EDAS).
     *
     * @example 5b2b4ab4-efbc-4a81-9c45-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'clusterId' => 'ClusterId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListK8sNamespacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
