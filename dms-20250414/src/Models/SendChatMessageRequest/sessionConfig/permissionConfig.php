<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest\sessionConfig;

use AlibabaCloud\Dara\Model;

class permissionConfig extends Model
{
    /**
     * @var string
     */
    public $defaultAction;
    protected $_name = [
        'defaultAction' => 'DefaultAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultAction) {
            $res['DefaultAction'] = $this->defaultAction;
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
        if (isset($map['DefaultAction'])) {
            $model->defaultAction = $map['DefaultAction'];
        }

        return $model;
    }
}
