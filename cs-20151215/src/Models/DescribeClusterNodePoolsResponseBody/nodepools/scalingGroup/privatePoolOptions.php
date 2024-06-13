<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\scalingGroup;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The private pool ID, which is the same as the ID of the elasticity assurance or capacity reservation for which the private pool is generated.
     *
     * @example eap-bp67acfmxazb4****
     *
     * @var string
     */
    public $id;

    /**
     * @description The type of the private node pool. This parameter specifies the type of the private node pool that is used to create instances. A private node pool is generated when an elasticity assurance or a capacity reservation service takes effect. The system selects a private node pool to launch instances. Valid values:
     *
     *   `Open`: uses open private pool. The system selects an open private node pool to launch instances. If no matching open private node pool is available, the resources in the public node pool are used.
     *   `Target`: uses the specified private node pool. The system uses the resources of the specified private node pool to launch instances. If the specified private node pool is unavailable, instances cannot be launched.
     *   `None`: No private node pool is used. The resources of private node pools are not used to launch instances.
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
