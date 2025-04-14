<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models;

use AlibabaCloud\Dara\Model;

class PushPromptRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $promptContent;
    protected $_name = [
        'groupId' => 'groupId',
        'promptContent' => 'promptContent',
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

        if (null !== $this->promptContent) {
            $res['promptContent'] = $this->promptContent;
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

        if (isset($map['promptContent'])) {
            $model->promptContent = $map['promptContent'];
        }

        return $model;
    }
}
