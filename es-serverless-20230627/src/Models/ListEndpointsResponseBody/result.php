<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\ListEndpointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListEndpointsResponseBody\result\endpointZones;

class result extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var int
     */
    public $created;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var endpointZones[]
     */
    public $endpointZones;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $updated;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectionStatus' => 'connectionStatus',
        'created' => 'created',
        'domain' => 'domain',
        'endpointId' => 'endpointId',
        'endpointZones' => 'endpointZones',
        'name' => 'name',
        'resourceId' => 'resourceId',
        'securityGroupIds' => 'securityGroupIds',
        'status' => 'status',
        'type' => 'type',
        'updated' => 'updated',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        if (\is_array($this->endpointZones)) {
            Model::validateArray($this->endpointZones);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['connectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointZones) {
            if (\is_array($this->endpointZones)) {
                $res['endpointZones'] = [];
                $n1 = 0;
                foreach ($this->endpointZones as $item1) {
                    $res['endpointZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['securityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['securityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['connectionStatus'])) {
            $model->connectionStatus = $map['connectionStatus'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }

        if (isset($map['endpointZones'])) {
            if (!empty($map['endpointZones'])) {
                $model->endpointZones = [];
                $n1 = 0;
                foreach ($map['endpointZones'] as $item1) {
                    $model->endpointZones[$n1] = endpointZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['securityGroupIds'])) {
            if (!empty($map['securityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['securityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
