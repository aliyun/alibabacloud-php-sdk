<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateElasticityAssuranceRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The type of the private pool with which you want to associate the elasticity assurance. Valid values:
     *
     *   Open: open private pool. If you use the elasticity assurance to create ECS instances, the open private pool that is associated with the elasticity assurance is automatically matched. If no capacity is available in the open private pool, resources in the public pool are automatically used to create the ECS instances.
     *   Target: targeted private pool. If you use the elasticity assurance to create ECS instances, the specified private pool that is associated with the elasticity assurance is automatically matched. If no capacity is available in the private pool, the ECS instances fail to be created.
     *
     * Default value: Open.
     *
     * @example Open
     *
     * @var string
     */
    public $matchCriteria;

    /**
     * @description The name of the elasticity assurance. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example eapTestName
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'matchCriteria' => 'MatchCriteria',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
