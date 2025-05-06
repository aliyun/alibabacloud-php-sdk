<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models;

use AlibabaCloud\Dara\Model;

class DeletePromptRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'groupId' => 'groupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
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
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        return $model;
    }
}
