<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\RunInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceIdSets extends Model
{
    /**
     * @var string[]
     */
    public $instanceIdSet;
    protected $_name = [
        'instanceIdSet' => 'InstanceIdSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdSet) {
            $res['InstanceIdSet'] = $this->instanceIdSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceIdSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIdSet'])) {
            if (!empty($map['InstanceIdSet'])) {
                $model->instanceIdSet = $map['InstanceIdSet'];
            }
        }

        return $model;
    }
}
