<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class QueryScriptWaveformsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptContent' => 'ScriptContent',
        'scriptId' => 'ScriptId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
