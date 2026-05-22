<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetAutomaticFrequencyControlConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'actionType' => 'ActionType',
        'enable' => 'Enable',
        'level' => 'Level',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
