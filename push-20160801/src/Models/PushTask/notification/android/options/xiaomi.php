<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class xiaomi extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $focusParam;

    /**
     * @var string
     */
    public $focusPics;
    protected $_name = [
        'channel' => 'Channel',
        'focusParam' => 'FocusParam',
        'focusPics' => 'FocusPics',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->focusParam) {
            $res['FocusParam'] = $this->focusParam;
        }

        if (null !== $this->focusPics) {
            $res['FocusPics'] = $this->focusPics;
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
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['FocusParam'])) {
            $model->focusParam = $map['FocusParam'];
        }

        if (isset($map['FocusPics'])) {
            $model->focusPics = $map['FocusPics'];
        }

        return $model;
    }
}
