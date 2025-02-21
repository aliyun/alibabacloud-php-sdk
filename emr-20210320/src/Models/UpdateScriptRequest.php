<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class UpdateScriptRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var Script
     */
    public $script;
    /**
     * @var string
     */
    public $scriptId;
    /**
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
        if (null !== $this->script) {
            $this->script->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
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
