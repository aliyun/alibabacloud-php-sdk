<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\history\content;

use AlibabaCloud\Dara\Model;

class cardCallback extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'content' => 'content',
        'templateId' => 'templateId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
