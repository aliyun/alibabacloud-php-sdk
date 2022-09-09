<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectBuildConfigResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\ProjectBuildConfigTaskPoliciesValue;
use AlibabaCloud\Tea\Model;

class projectBuildConfig extends Model
{
    /**
     * @var ProjectBuildConfigTaskPoliciesValue[]
     */
    public $taskPolicies;
    protected $_name = [
        'taskPolicies' => 'taskPolicies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskPolicies) {
            $res['taskPolicies'] = [];
            if (null !== $this->taskPolicies && \is_array($this->taskPolicies)) {
                foreach ($this->taskPolicies as $key => $val) {
                    $res['taskPolicies'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectBuildConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskPolicies'])) {
            $model->taskPolicies = $map['taskPolicies'];
        }

        return $model;
    }
}
