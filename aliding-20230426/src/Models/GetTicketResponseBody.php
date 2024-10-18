<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\creator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\processor;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\takers;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\template;
use AlibabaCloud\Tea\Model;

class GetTicketResponseBody extends Model
{
    /**
     * @example 2021-07-09 14:45:01
     *
     * @var string
     */
    public $createTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @example [{ "customerVisible": true,"editable": false,"identifier": "input1","name": "正文","placeholder": "请输入","required": false,"type": "TEXT_AREA","value": "123"},{"customerVisible": true,"editable": false,"identifier": "input2","name": "单选","options": [{"color": "#000000","value": "选项1"},{"color": "#000000","value": "选项2"},{"color": "#000000","value": "选项3"}],"required": false,"type": "RADIO"},{"customerVisible": true,"editable": false,"identifier": "input3","name": "多选","options": [{"color": "#000000","value": "选项1"},{"color": "#000000","value": "选项2"},{"color": "#000000","value": "选项3"}],"required": false,"type": "CHECKBOX"},{"customerVisible": true,"editable": false,"identifier": "input5","name": "数字","required": false,"type": "INPUT_NUMBER"},{"customerVisible": true,"editable": false,"identifier": "input6","maxFileNum": 20,"name": "上传","required": false,"type": "FILE"},{"customerVisible": true,"editable": false,"identifier": "input7","maxFileNum": 20,"name": "图片","required": false,"type": "IMAGE"},{"customerVisible": true,"editable": false,"format": "DATE_TIME","identifier": "input8","name": "日期","required": false,"type": "DATE_TIME_PICKER"}]
     *
     * @var string
     */
    public $customFields;

    /**
     * @example cidZBSNxxxxXUCrAA==
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @example a8iSxxxxtgiE
     *
     * @var string
     */
    public $openTicketId;

    /**
     * @var processor
     */
    public $processor;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SG
     *
     * @var string
     */
    public $scene;

    /**
     * @example {"groupId":1893227,"groupIsNormal":true,"groupName":"API和SPI测试群","groupSetId":29003,"groupSetName":"默认服务群组","scene":"SG"}
     *
     * @var string
     */
    public $sceneContext;

    /**
     * @example FINISHED
     *
     * @var string
     */
    public $stage;

    /**
     * @var takers[]
     */
    public $takers;

    /**
     * @var template
     */
    public $template;

    /**
     * @example 贤文api测试，处理人王鸿程和李航宇
     *
     * @var string
     */
    public $title;

    /**
     * @example 2021-07-09 19:26:09
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $vendorRequestId;

    /**
     * @example dingtalk
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'createTime'         => 'createTime',
        'creator'            => 'creator',
        'customFields'       => 'customFields',
        'openConversationId' => 'openConversationId',
        'openTicketId'       => 'openTicketId',
        'processor'          => 'processor',
        'requestId'          => 'requestId',
        'scene'              => 'scene',
        'sceneContext'       => 'sceneContext',
        'stage'              => 'stage',
        'takers'             => 'takers',
        'template'           => 'template',
        'title'              => 'title',
        'updateTime'         => 'updateTime',
        'vendorRequestId'    => 'vendorRequestId',
        'vendorType'         => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toMap() : null;
        }
        if (null !== $this->customFields) {
            $res['customFields'] = $this->customFields;
        }
        if (null !== $this->openConversationId) {
            $res['openConversationId'] = $this->openConversationId;
        }
        if (null !== $this->openTicketId) {
            $res['openTicketId'] = $this->openTicketId;
        }
        if (null !== $this->processor) {
            $res['processor'] = null !== $this->processor ? $this->processor->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->sceneContext) {
            $res['sceneContext'] = $this->sceneContext;
        }
        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }
        if (null !== $this->takers) {
            $res['takers'] = [];
            if (null !== $this->takers && \is_array($this->takers)) {
                $n = 0;
                foreach ($this->takers as $item) {
                    $res['takers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toMap() : null;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTicketResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creator'])) {
            $model->creator = creator::fromMap($map['creator']);
        }
        if (isset($map['customFields'])) {
            $model->customFields = $map['customFields'];
        }
        if (isset($map['openConversationId'])) {
            $model->openConversationId = $map['openConversationId'];
        }
        if (isset($map['openTicketId'])) {
            $model->openTicketId = $map['openTicketId'];
        }
        if (isset($map['processor'])) {
            $model->processor = processor::fromMap($map['processor']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['sceneContext'])) {
            $model->sceneContext = $map['sceneContext'];
        }
        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }
        if (isset($map['takers'])) {
            if (!empty($map['takers'])) {
                $model->takers = [];
                $n             = 0;
                foreach ($map['takers'] as $item) {
                    $model->takers[$n++] = null !== $item ? takers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
