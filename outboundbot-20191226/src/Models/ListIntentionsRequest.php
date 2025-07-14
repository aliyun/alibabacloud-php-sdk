<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ListIntentionsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $annotationMissionDataSourceType;

    /**
     * @example chatbot-cn-n7QmzrUnNe
     *
     * @var string
     */
    public $botId;

    /**
     * @example 2
     *
     * @var int
     */
    public $environment;

    /**
     * @example e5035654-1745-484a-8c5b-165f7c7bcd79
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10717802
     *
     * @var int
     */
    public $intentId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example c5c5d8c0-c0f1-48a7-be2b-dc46006d888a
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'annotationMissionDataSourceType' => 'AnnotationMissionDataSourceType',
        'botId' => 'BotId',
        'environment' => 'Environment',
        'instanceId' => 'InstanceId',
        'intentId' => 'IntentId',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'scriptId' => 'ScriptId',
        'userNick' => 'UserNick',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionDataSourceType) {
            $res['AnnotationMissionDataSourceType'] = $this->annotationMissionDataSourceType;
        }
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIntentionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionDataSourceType'])) {
            $model->annotationMissionDataSourceType = $map['AnnotationMissionDataSourceType'];
        }
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
