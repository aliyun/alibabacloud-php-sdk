<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateGroupRequest;

use AlibabaCloud\Dara\Model;

class notifyConfig extends Model
{
    /**
     * @var string
     */
    public $notifyPath;

    /**
     * @var string
     */
    public $notifyType;
    protected $_name = [
        'notifyPath' => 'notifyPath',
        'notifyType' => 'notifyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notifyPath) {
            $res['notifyPath'] = $this->notifyPath;
        }

        if (null !== $this->notifyType) {
            $res['notifyType'] = $this->notifyType;
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
        if (isset($map['notifyPath'])) {
            $model->notifyPath = $map['notifyPath'];
        }

        if (isset($map['notifyType'])) {
            $model->notifyType = $map['notifyType'];
        }

        return $model;
    }
}
