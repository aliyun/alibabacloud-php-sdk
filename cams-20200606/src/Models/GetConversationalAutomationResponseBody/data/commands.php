<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetConversationalAutomationResponseBody\data;

use AlibabaCloud\Tea\Model;

class commands extends Model
{
    /**
     * @description The description of the command.
     *
     * @example description
     *
     * @var string
     */
    public $commandDescription;

    /**
     * @description The name of the command.
     *
     * @example common1
     *
     * @var string
     */
    public $commandName;
    protected $_name = [
        'commandDescription' => 'CommandDescription',
        'commandName' => 'CommandName',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return commands
     */
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
