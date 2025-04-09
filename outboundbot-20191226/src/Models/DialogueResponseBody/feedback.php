<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DialogueResponseBody;

use AlibabaCloud\Dara\Model;

class feedback extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $actionParams;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentParams;

    /**
     * @var bool
     */
    public $interruptible;
    protected $_name = [
        'action' => 'Action',
        'actionParams' => 'ActionParams',
        'content' => 'Content',
        'contentParams' => 'ContentParams',
        'interruptible' => 'Interruptible',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentParams) {
            $res['ContentParams'] = $this->contentParams;
        }

        if (null !== $this->interruptible) {
            $res['Interruptible'] = $this->interruptible;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentParams'])) {
            $model->contentParams = $map['ContentParams'];
        }

        if (isset($map['Interruptible'])) {
            $model->interruptible = $map['Interruptible'];
        }

        return $model;
    }
}
