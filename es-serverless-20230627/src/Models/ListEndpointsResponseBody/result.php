<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\ListEndpointsResponseBody;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\ListEndpointsResponseBody\result\endpointZones;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example Pending
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @example 1701259721
     *
     * @var int
     */
    public $created;

    /**
     * @example ep-bp1i522d****a3.epsrv-bp1f****gei.cn-hangzhou.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example essep-2f46b743f60****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @var endpointZones[]
     */
    public $endpointZones;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example ep-bp1id41dd116e52e****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example VPC
     *
     * @var string
     */
    public $type;

    /**
     * @example 1701259721
     *
     * @var int
     */
    public $updated;

    /**
     * @example vpc-uf6gykvwcirp886ef****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectionStatus' => 'connectionStatus',
        'created'          => 'created',
        'domain'           => 'domain',
        'endpointId'       => 'endpointId',
        'endpointZones'    => 'endpointZones',
        'name'             => 'name',
        'resourceId'       => 'resourceId',
        'securityGroupIds' => 'securityGroupIds',
        'status'           => 'status',
        'type'             => 'type',
        'updated'          => 'updated',
        'vpcId'            => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['endpointZones'] = [];
            if (null !== $this->endpointZones && \is_array($this->endpointZones)) {
                $n = 0;
                foreach ($this->endpointZones as $item) {
                    $res['endpointZones'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['securityGroupIds'] = $this->securityGroupIds;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
                $n                    = 0;
                foreach ($map['endpointZones'] as $item) {
                    $model->endpointZones[$n++] = null !== $item ? endpointZones::fromMap($item) : $item;
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
                $model->securityGroupIds = $map['securityGroupIds'];
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
