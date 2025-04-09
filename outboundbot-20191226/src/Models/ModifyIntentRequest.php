<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyIntentRequest extends Model
{
    /**
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
    public $intentId;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $utterances;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'intentDescription' => 'IntentDescription',
        'intentId' => 'IntentId',
        'intentName' => 'IntentName',
        'keywords' => 'Keywords',
        'scriptId' => 'ScriptId',
        'utterances' => 'Utterances',
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
