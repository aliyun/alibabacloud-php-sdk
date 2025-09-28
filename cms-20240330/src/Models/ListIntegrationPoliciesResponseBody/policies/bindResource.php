<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesResponseBody\policies;

use AlibabaCloud\Dara\Model;

class bindResource extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $vpcCidr;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId' => 'clusterId',
        'clusterType' => 'clusterType',
        'vpcCidr' => 'vpcCidr',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterType) {
            $res['clusterType'] = $this->clusterType;
        }

        if (null !== $this->vpcCidr) {
            $res['vpcCidr'] = $this->vpcCidr;
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['clusterType'])) {
            $model->clusterType = $map['clusterType'];
        }

        if (isset($map['vpcCidr'])) {
            $model->vpcCidr = $map['vpcCidr'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
