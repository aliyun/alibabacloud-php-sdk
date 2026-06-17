<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyUserAlarmConfigShrinkRequest\alarmConfig;

class ModifyUserAlarmConfigShrinkRequest extends Model
{
    /**
     * @var alarmConfig[]
     */
    public $alarmConfig;

    /**
     * @var string
     */
    public $alarmLang;

    /**
     * @var string
     */
    public $contactConfigShrink;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $useDefaultContact;
    protected $_name = [
        'alarmConfig' => 'AlarmConfig',
        'alarmLang' => 'AlarmLang',
        'contactConfigShrink' => 'ContactConfig',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
        'useDefaultContact' => 'UseDefaultContact',
    ];

    public function validate()
    {
        if (\is_array($this->alarmConfig)) {
            Model::validateArray($this->alarmConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmConfig) {
            if (\is_array($this->alarmConfig)) {
                $res['AlarmConfig'] = [];
                $n1 = 0;
                foreach ($this->alarmConfig as $item1) {
                    $res['AlarmConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alarmLang) {
            $res['AlarmLang'] = $this->alarmLang;
        }

        if (null !== $this->contactConfigShrink) {
            $res['ContactConfig'] = $this->contactConfigShrink;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->useDefaultContact) {
            $res['UseDefaultContact'] = $this->useDefaultContact;
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
        if (isset($map['AlarmConfig'])) {
            if (!empty($map['AlarmConfig'])) {
                $model->alarmConfig = [];
                $n1 = 0;
                foreach ($map['AlarmConfig'] as $item1) {
                    $model->alarmConfig[$n1] = alarmConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AlarmLang'])) {
            $model->alarmLang = $map['AlarmLang'];
        }

        if (isset($map['ContactConfig'])) {
            $model->contactConfigShrink = $map['ContactConfig'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['UseDefaultContact'])) {
            $model->useDefaultContact = $map['UseDefaultContact'];
        }

        return $model;
    }
}
