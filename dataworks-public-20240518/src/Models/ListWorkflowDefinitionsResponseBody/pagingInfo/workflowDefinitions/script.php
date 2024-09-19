<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo\workflowDefinitions;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListWorkflowDefinitionsResponseBody\pagingInfo\workflowDefinitions\script\runtime;
use AlibabaCloud\Tea\Model;

class script extends Model
{
    /**
     * @description 工作流脚本的id
     *
     * @example 698002781368644XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description 工作流的脚本路径
     *
     * @var string
     */
    public $path;

    /**
     * @description 脚本的运行时信息
     *
     * @var runtime
     */
    public $runtime;
    protected $_name = [
        'id'      => 'Id',
        'path'    => 'Path',
        'runtime' => 'Runtime',
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
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return script
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = runtime::fromMap($map['Runtime']);
        }

        return $model;
    }
}
