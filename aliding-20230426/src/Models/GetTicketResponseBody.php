<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\creator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\processor;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\takers;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody\template;

class GetTicketResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var creator
     */
    public $creator;
    /**
     * @var string
     */
    public $customFields;
    /**
     * @var string
     */
    public $openConversationId;
    /**
     * @var string
     */
    public $openTicketId;
    /**
     * @var processor
     */
    public $processor;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $scene;
    /**
     * @var string
     */
    public $sceneContext;
    /**
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
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $vendorRequestId;
    /**
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
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->processor) {
            $this->processor->validate();
        }
        if (\is_array($this->takers)) {
            Model::validateArray($this->takers);
        }
        if (null !== $this->template) {
            $this->template->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
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
            $res['processor'] = null !== $this->processor ? $this->processor->toArray($noStream) : $this->processor;
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
            if (\is_array($this->takers)) {
                $res['takers'] = [];
                $n1            = 0;
                foreach ($this->takers as $item1) {
                    $res['takers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1            = 0;
                foreach ($map['takers'] as $item1) {
                    $model->takers[$n1++] = takers::fromMap($item1);
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
