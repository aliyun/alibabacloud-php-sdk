<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteChartNamespaceRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the chart namespace that you want to delete.
     *
     * @example ns2
     *
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'namespaceName' => 'NamespaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteChartNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        return $model;
    }
}
