<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponseBody\parameterGroups\parameterGroup;
use AlibabaCloud\Tea\Model;

class parameterGroups extends Model
{
    /**
     * @var parameterGroup[]
     */
    public $parameterGroup;
    protected $_name = [
        'parameterGroup' => 'ParameterGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterGroup) {
            $res['ParameterGroup'] = [];
            if (null !== $this->parameterGroup && \is_array($this->parameterGroup)) {
                $n = 0;
                foreach ($this->parameterGroup as $item) {
                    $res['ParameterGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroup'])) {
            if (!empty($map['ParameterGroup'])) {
                $model->parameterGroup = [];
                $n                     = 0;
                foreach ($map['ParameterGroup'] as $item) {
                    $model->parameterGroup[$n++] = null !== $item ? parameterGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
