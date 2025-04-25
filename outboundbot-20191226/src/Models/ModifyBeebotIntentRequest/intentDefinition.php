<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentRequest;

use AlibabaCloud\Dara\Model;

class intentDefinition extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $intentName;
    protected $_name = [
        'aliasName' => 'AliasName',
        'intentName' => 'IntentName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
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
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }

        return $model;
    }
}
