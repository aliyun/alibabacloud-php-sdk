<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyIntentRequest extends Model
{
    /**
     * @example 8fa1953f-4a84-46d8-b80c-8ce9cf684fb3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intentDescription;

    /**
     * @example 3b9a2b33-50d4-4576-8c68-22498f4bf731
     *
     * @var string
     */
    public $intentId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @example []
     *
     * @var string
     */
    public $keywords;

    /**
     * @example 9b70486f-b1c2-429c-8a24-62798015ab1b
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $utterances;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'intentDescription' => 'IntentDescription',
        'intentId'          => 'IntentId',
        'intentName'        => 'IntentName',
        'keywords'          => 'Keywords',
        'scriptId'          => 'ScriptId',
        'utterances'        => 'Utterances',
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
        if (null !== $this->intentDescription) {
            $res['IntentDescription'] = $this->intentDescription;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->utterances) {
            $res['Utterances'] = $this->utterances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIntentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentDescription'])) {
            $model->intentDescription = $map['IntentDescription'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['Utterances'])) {
            $model->utterances = $map['Utterances'];
        }

        return $model;
    }
}
