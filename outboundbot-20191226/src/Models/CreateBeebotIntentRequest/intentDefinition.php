<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentRequest;

use AlibabaCloud\Tea\Model;

class intentDefinition extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $intentName;
    protected $_name = [
        'aliasName' => 'AliasName',
        'intentName' => 'IntentName',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return intentDefinition
     */
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
