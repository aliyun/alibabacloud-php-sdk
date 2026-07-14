<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ResponsePlanDetail\pushingSetting;
use AlibabaCloud\SDK\Cms\V20240330\Models\ResponsePlanDetail\repeatNotifySetting;

class ResponsePlanDetail extends Model
{
    /**
     * @var int
     */
    public $autoRecoverSeconds;

    /**
     * @var string[]
     */
    public $escalationId;

    /**
     * @var pushingSetting
     */
    public $pushingSetting;

    /**
     * @var repeatNotifySetting
     */
    public $repeatNotifySetting;
    protected $_name = [
        'autoRecoverSeconds' => 'autoRecoverSeconds',
        'escalationId' => 'escalationId',
        'pushingSetting' => 'pushingSetting',
        'repeatNotifySetting' => 'repeatNotifySetting',
    ];

    public function validate()
    {
        if (\is_array($this->escalationId)) {
            Model::validateArray($this->escalationId);
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
        }
        if (null !== $this->repeatNotifySetting) {
            $this->repeatNotifySetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRecoverSeconds) {
            $res['autoRecoverSeconds'] = $this->autoRecoverSeconds;
        }

        if (null !== $this->escalationId) {
            if (\is_array($this->escalationId)) {
                $res['escalationId'] = [];
                $n1 = 0;
                foreach ($this->escalationId as $item1) {
                    $res['escalationId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pushingSetting) {
            $res['pushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
        }

        if (null !== $this->repeatNotifySetting) {
            $res['repeatNotifySetting'] = null !== $this->repeatNotifySetting ? $this->repeatNotifySetting->toArray($noStream) : $this->repeatNotifySetting;
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
        if (isset($map['autoRecoverSeconds'])) {
            $model->autoRecoverSeconds = $map['autoRecoverSeconds'];
        }

        if (isset($map['escalationId'])) {
            if (!empty($map['escalationId'])) {
                $model->escalationId = [];
                $n1 = 0;
                foreach ($map['escalationId'] as $item1) {
                    $model->escalationId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['pushingSetting'])) {
            $model->pushingSetting = pushingSetting::fromMap($map['pushingSetting']);
        }

        if (isset($map['repeatNotifySetting'])) {
            $model->repeatNotifySetting = repeatNotifySetting::fromMap($map['repeatNotifySetting']);
        }

        return $model;
    }
}
