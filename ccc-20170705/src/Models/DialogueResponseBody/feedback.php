<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\DialogueResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @var bool
     */
    public $interruptible;
    protected $_name = [
        'action'        => 'Action',
        'actionParams'  => 'ActionParams',
        'content'       => 'Content',
        'interruptible' => 'Interruptible',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->interruptible) {
            $res['Interruptible'] = $this->interruptible;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feedback
     */
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
        if (isset($map['Interruptible'])) {
            $model->interruptible = $map['Interruptible'];
        }

        return $model;
    }
}
