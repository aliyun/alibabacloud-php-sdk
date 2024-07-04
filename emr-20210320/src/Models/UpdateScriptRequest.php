<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class UpdateScriptRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 区域ID。
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 集群脚本。
     *
     * This parameter is required.
     * @var Script
     */
    public $script;

    /**
     * @description 脚本ID。
     *
     * This parameter is required.
     * @example cs-da7476a7679a4d4c9cede62ebe09****
     *
     * @var string
     */
    public $scriptId;

    /**
     * @description 集群脚本类型。
     *
     * This parameter is required.
     * @example BOOTSTRAP
     *
     * @var string
     */
    public $scriptType;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'regionId'   => 'RegionId',
        'script'     => 'Script',
        'scriptId'   => 'ScriptId',
        'scriptType' => 'ScriptType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toMap() : null;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Script'])) {
            $model->script = Script::fromMap($map['Script']);
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }

        return $model;
    }
}
