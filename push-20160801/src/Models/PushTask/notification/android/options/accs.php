<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class accs extends Model
{
    /**
     * @var int
     */
    public $customStyle;

    /**
     * @var string
     */
    public $notifyType;

    /**
     * @var string
     */
    public $openActivity;

    /**
     * @var string
     */
    public $openType;

    /**
     * @var string
     */
    public $openUrl;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'customStyle' => 'CustomStyle',
        'notifyType' => 'NotifyType',
        'openActivity' => 'OpenActivity',
        'openType' => 'OpenType',
        'openUrl' => 'OpenUrl',
        'priority' => 'Priority',
        'threadId' => 'ThreadId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customStyle) {
            $res['CustomStyle'] = $this->customStyle;
        }

        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }

        if (null !== $this->openActivity) {
            $res['OpenActivity'] = $this->openActivity;
        }

        if (null !== $this->openType) {
            $res['OpenType'] = $this->openType;
        }

        if (null !== $this->openUrl) {
            $res['OpenUrl'] = $this->openUrl;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
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
        if (isset($map['CustomStyle'])) {
            $model->customStyle = $map['CustomStyle'];
        }

        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }

        if (isset($map['OpenActivity'])) {
            $model->openActivity = $map['OpenActivity'];
        }

        if (isset($map['OpenType'])) {
            $model->openType = $map['OpenType'];
        }

        if (isset($map['OpenUrl'])) {
            $model->openUrl = $map['OpenUrl'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }

        return $model;
    }
}
