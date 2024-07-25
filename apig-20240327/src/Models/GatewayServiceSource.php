<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayServiceSource\k8sServiceSourceInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayServiceSource\nacosServiceSourceInfo;
use AlibabaCloud\Tea\Model;

class GatewayServiceSource extends Model
{
    /**
     * @var bool
     */
    public $bound;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var k8sServiceSourceInfo
     */
    public $k8sServiceSourceInfo;

    /**
     * @var nacosServiceSourceInfo
     */
    public $nacosServiceSourceInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceSourceId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'bound'                  => 'bound',
        'createTimestamp'        => 'createTimestamp',
        'k8sServiceSourceInfo'   => 'k8sServiceSourceInfo',
        'nacosServiceSourceInfo' => 'nacosServiceSourceInfo',
        'name'                   => 'name',
        'serviceSourceId'        => 'serviceSourceId',
        'type'                   => 'type',
        'updateTimestamp'        => 'updateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bound) {
            $res['bound'] = $this->bound;
        }
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->k8sServiceSourceInfo) {
            $res['k8sServiceSourceInfo'] = null !== $this->k8sServiceSourceInfo ? $this->k8sServiceSourceInfo->toMap() : null;
        }
        if (null !== $this->nacosServiceSourceInfo) {
            $res['nacosServiceSourceInfo'] = null !== $this->nacosServiceSourceInfo ? $this->nacosServiceSourceInfo->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->serviceSourceId) {
            $res['serviceSourceId'] = $this->serviceSourceId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayServiceSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bound'])) {
            $model->bound = $map['bound'];
        }
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }
        if (isset($map['k8sServiceSourceInfo'])) {
            $model->k8sServiceSourceInfo = k8sServiceSourceInfo::fromMap($map['k8sServiceSourceInfo']);
        }
        if (isset($map['nacosServiceSourceInfo'])) {
            $model->nacosServiceSourceInfo = nacosServiceSourceInfo::fromMap($map['nacosServiceSourceInfo']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['serviceSourceId'])) {
            $model->serviceSourceId = $map['serviceSourceId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
