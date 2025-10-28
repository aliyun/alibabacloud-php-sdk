<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup;

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
        if (\is_array($this->deployGroup)) {
            Model::validateArray($this->deployGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployGroup) {
            if (\is_array($this->deployGroup)) {
                $res['DeployGroup'] = [];
                $n1 = 0;
                foreach ($this->deployGroup as $item1) {
                    $res['DeployGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DeployGroup'])) {
            if (!empty($map['DeployGroup'])) {
                $model->deployGroup = [];
                $n1 = 0;
                foreach ($map['DeployGroup'] as $item1) {
                    $model->deployGroup[$n1] = deployGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
