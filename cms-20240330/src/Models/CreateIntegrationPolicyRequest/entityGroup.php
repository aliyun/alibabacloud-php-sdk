<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreateIntegrationPolicyRequest;

use AlibabaCloud\Dara\Model;

class entityGroup extends Model
{
    /**
     * @var string
     */
    public $clusterEntityType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $entityGroupId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterEntityType' => 'clusterEntityType',
        'clusterId' => 'clusterId',
        'entityGroupId' => 'entityGroupId',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterEntityType) {
            $res['clusterEntityType'] = $this->clusterEntityType;
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->entityGroupId) {
            $res['entityGroupId'] = $this->entityGroupId;
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
        if (isset($map['clusterEntityType'])) {
            $model->clusterEntityType = $map['clusterEntityType'];
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['entityGroupId'])) {
            $model->entityGroupId = $map['entityGroupId'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
