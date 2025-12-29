<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushVoiceBoxCommandsRequest;

use AlibabaCloud\Dara\Model;

class commands extends Model
{
    /**
     * @var string
     */
    public $commandDomain;

    /**
     * @var string
     */
    public $commandName;

    /**
     * @var string
     */
    public $payload;
    protected $_name = [
        'commandDomain' => 'CommandDomain',
        'commandName' => 'CommandName',
        'payload' => 'Payload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandDomain) {
            $res['CommandDomain'] = $this->commandDomain;
        }

        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }

        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
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
        if (isset($map['CommandDomain'])) {
            $model->commandDomain = $map['CommandDomain'];
        }

        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }

        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }

        return $model;
    }
}
