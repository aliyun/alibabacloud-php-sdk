<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateElasticNetworkInterfaceResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Lingjun Elastic Network Interface ID.
     *
     * @example leni-1fejojjo****
     *
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @description The ID of the Lingjun node.
     *
     * @example e01-cn-lbj3aej****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'nodeId'                    => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticNetworkInterfaceId) {
            $res['ElasticNetworkInterfaceId'] = $this->elasticNetworkInterfaceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticNetworkInterfaceId'])) {
            $model->elasticNetworkInterfaceId = $map['ElasticNetworkInterfaceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
