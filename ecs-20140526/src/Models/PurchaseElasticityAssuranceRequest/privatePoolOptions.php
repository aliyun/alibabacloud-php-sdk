<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\PurchaseElasticityAssuranceRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The ID of the elasticity assurance.
     *
     * This parameter is required.
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the private pool that is associated with the elasticity assurance. Valid values:
     *
     *   Open: open private pool. If you use the elasticity assurance to create ECS instances, the open private pool that is associated with the elasticity assurance is automatically matched. If no capacity is available in the open private pool, resources in the public pool are automatically used to create the ECS instances.
     *   Target: targeted private pool. If you use the elasticity assurance to create ECS instances, the targeted private pool that is associated with the elasticity assurance is automatically matched. If no capacity is available in the private pool, the ECS instances fail to be created.
     *
     * Default value: Open.
     * @example Open
     *
     * @var string
     */
    public $matchCriteria;
    protected $_name = [
        'id'            => 'Id',
        'matchCriteria' => 'MatchCriteria',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }

        return $model;
    }
}
