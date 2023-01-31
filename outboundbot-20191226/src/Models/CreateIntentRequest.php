<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentRequest extends Model
{
    /**
     * @example 361c8a53-0e29-42f3-8aa7-c7752d010399
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intentDescription;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @example b06fad9a-cc74-4ab6-b3a5-8d062adebf2c
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
     * @return CreateIntentRequest
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
