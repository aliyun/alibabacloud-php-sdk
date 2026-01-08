<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\UpdateConversationalAutomationRequest;

use AlibabaCloud\Dara\Model;

class commands extends Model
{
    /**
     * @var string
     */
    public $commandDescription;

    /**
     * @var string
     */
    public $commandName;
    protected $_name = [
        'commandDescription' => 'CommandDescription',
        'commandName' => 'CommandName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandDescription) {
            $res['CommandDescription'] = $this->commandDescription;
        }

        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
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
        if (isset($map['CommandDescription'])) {
            $model->commandDescription = $map['CommandDescription'];
        }

        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }

        return $model;
    }
}
