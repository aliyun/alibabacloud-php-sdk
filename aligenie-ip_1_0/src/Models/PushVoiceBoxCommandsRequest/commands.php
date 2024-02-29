<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushVoiceBoxCommandsRequest;

use AlibabaCloud\Tea\Model;

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
        'commandName'   => 'CommandName',
        'payload'       => 'Payload',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return commands
     */
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
