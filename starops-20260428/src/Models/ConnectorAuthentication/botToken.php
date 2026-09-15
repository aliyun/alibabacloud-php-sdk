<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthentication;

use AlibabaCloud\Dara\Model;

class botToken extends Model
{
    /**
     * @var string
     */
    public $botId;
    protected $_name = [
        'botId' => 'botId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botId) {
            $res['botId'] = $this->botId;
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
        if (isset($map['botId'])) {
            $model->botId = $map['botId'];
        }

        return $model;
    }
}
