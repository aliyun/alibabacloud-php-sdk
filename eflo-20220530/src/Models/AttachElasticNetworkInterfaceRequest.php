<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class AttachElasticNetworkInterfaceRequest extends Model
{
    /**
     * @var string
     */
    public $elasticNetworkInterfaceId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'elasticNetworkInterfaceId' => 'ElasticNetworkInterfaceId',
        'nodeId' => 'NodeId',
        'regionId' => 'RegionId',
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
