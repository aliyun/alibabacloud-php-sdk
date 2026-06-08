<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateProcessDefinitionRequest;

use AlibabaCloud\Dara\Model;

class notificationServices extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $receiver;
    protected $_name = [
        'channel' => 'Channel',
        'extension' => 'Extension',
        'receiver' => 'Receiver',
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

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
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

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }

        return $model;
    }
}
