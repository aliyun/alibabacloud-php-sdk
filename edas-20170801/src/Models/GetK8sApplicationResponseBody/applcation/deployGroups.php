<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup;
use AlibabaCloud\Tea\Model;

class deployGroups extends Model
{
    /**
     * @var deployGroup[]
     */
    public $deployGroup;
    protected $_name = [
        'deployGroup' => 'DeployGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployGroup) {
            $res['DeployGroup'] = [];
            if (null !== $this->deployGroup && \is_array($this->deployGroup)) {
                $n = 0;
                foreach ($this->deployGroup as $item) {
                    $res['DeployGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployGroup'])) {
            if (!empty($map['DeployGroup'])) {
                $model->deployGroup = [];
                $n                  = 0;
                foreach ($map['DeployGroup'] as $item) {
                    $model->deployGroup[$n++] = null !== $item ? deployGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
