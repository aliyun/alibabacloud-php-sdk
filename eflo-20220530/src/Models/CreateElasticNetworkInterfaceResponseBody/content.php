<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateElasticNetworkInterfaceResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
