<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListInvocationLogsResponseBody\logs;

use AlibabaCloud\Tea\Model;

class workflow extends Model
{
    /**
     * @description 工作流定义
     *
     * @var string
     */
    public $definition;

    /**
     * @description 工作流版本
     *
     * @var string
     */
    public $version;

    /**
     * @description 工作流 ID
     *
     * @var string
     */
    public $flowId;
    protected $_name = [
        'definition' => 'Definition',
        'version'    => 'Version',
        'flowId'     => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
