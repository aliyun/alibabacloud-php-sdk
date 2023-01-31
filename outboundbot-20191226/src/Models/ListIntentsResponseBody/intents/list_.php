<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentsResponseBody\intents;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1578469042851
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $intentDescription;

    /**
     * @example a8494b35-eefb-4c8a-887b-b60d2f0fa57a
     *
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
     * @example 6ef95fd5-558f-4ee8-af34-b2ede087a87c
     *
     * @var string
     */
    public $scriptId;

    /**
     * @example 1578469042851
     *
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $utterances;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'intentDescription' => 'IntentDescription',
        'intentId'          => 'IntentId',
        'intentName'        => 'IntentName',
        'keywords'          => 'Keywords',
        'scriptId'          => 'ScriptId',
        'updateTime'        => 'UpdateTime',
        'utterances'        => 'Utterances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->utterances) {
            $res['Utterances'] = $this->utterances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Utterances'])) {
            $model->utterances = $map['Utterances'];
        }

        return $model;
    }
}
