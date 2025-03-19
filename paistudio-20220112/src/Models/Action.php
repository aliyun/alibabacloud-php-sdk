<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class Action extends Model
{
    /**
     * @var string
     */
    public $actionType;
    protected $_name = [
        'actionType' => 'ActionType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Action
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        return $model;
    }
}
