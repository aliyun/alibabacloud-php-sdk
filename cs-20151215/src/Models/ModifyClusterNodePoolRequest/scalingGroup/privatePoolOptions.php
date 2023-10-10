<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\scalingGroup;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The ID of the private node pool.
     *
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of private node pool. This parameter specifies the type of private pool that you want to use to create instances. A private pool is generated when an elasticity assurance or a capacity reservation takes effect. The system selects a private pool to start instances. Valid values:
     *
     *   `Open`: open private pool. The system selects an open private pool to start instances. If no matching open private pools are available, the resources in the public pool are used.
     *   `Target`: specific private pool. The system uses the resources of the specified private pool to start instances. If the specified private pool is unavailable, instances cannot be started.
     *   `None`: no private pool is used. The resources of private pools are not used to start instances.
     *
     * @example Open
     *
     * @var string
     */
    public $matchCriteria;
    protected $_name = [
        'id'            => 'id',
        'matchCriteria' => 'match_criteria',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->matchCriteria) {
            $res['match_criteria'] = $this->matchCriteria;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['match_criteria'])) {
            $model->matchCriteria = $map['match_criteria'];
        }

        return $model;
    }
}
