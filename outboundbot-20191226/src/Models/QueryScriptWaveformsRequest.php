<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class QueryScriptWaveformsRequest extends Model
{
    /**
     * @example 7cec0652-79fb-4f7e-8bbf-86c9fa75b992
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @example 19ac2375-53e3-477f-abe9-6cd334227981
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'scriptContent' => 'ScriptContent',
        'scriptId'      => 'ScriptId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return QueryScriptWaveformsRequest
     */
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
