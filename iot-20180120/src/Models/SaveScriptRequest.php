<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SaveScriptRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $parserId;

    /**
     * @var string
     */
    public $scriptDraft;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'parserId'      => 'ParserId',
        'scriptDraft'   => 'ScriptDraft',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->parserId) {
            $res['ParserId'] = $this->parserId;
        }
        if (null !== $this->scriptDraft) {
            $res['ScriptDraft'] = $this->scriptDraft;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ParserId'])) {
            $model->parserId = $map['ParserId'];
        }
        if (isset($map['ScriptDraft'])) {
            $model->scriptDraft = $map['ScriptDraft'];
        }

        return $model;
    }
}
