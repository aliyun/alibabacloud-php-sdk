<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class StreamingResourceSetting extends Model
{
    /**
     * @var BasicResourceSetting
     */
    public $basicResourceSetting;
    /**
     * @var ExpertResourceSetting
     */
    public $expertResourceSetting;
    /**
     * @var string
     */
    public $resourceSettingMode;
    protected $_name = [
        'basicResourceSetting'  => 'basicResourceSetting',
        'expertResourceSetting' => 'expertResourceSetting',
        'resourceSettingMode'   => 'resourceSettingMode',
    ];

    public function validate()
    {
        if (null !== $this->basicResourceSetting) {
            $this->basicResourceSetting->validate();
        }
        if (null !== $this->expertResourceSetting) {
            $this->expertResourceSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicResourceSetting) {
            $res['basicResourceSetting'] = null !== $this->basicResourceSetting ? $this->basicResourceSetting->toArray($noStream) : $this->basicResourceSetting;
        }

        if (null !== $this->expertResourceSetting) {
            $res['expertResourceSetting'] = null !== $this->expertResourceSetting ? $this->expertResourceSetting->toArray($noStream) : $this->expertResourceSetting;
        }

        if (null !== $this->resourceSettingMode) {
            $res['resourceSettingMode'] = $this->resourceSettingMode;
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
        if (isset($map['basicResourceSetting'])) {
            $model->basicResourceSetting = BasicResourceSetting::fromMap($map['basicResourceSetting']);
        }

        if (isset($map['expertResourceSetting'])) {
            $model->expertResourceSetting = ExpertResourceSetting::fromMap($map['expertResourceSetting']);
        }

        if (isset($map['resourceSettingMode'])) {
            $model->resourceSettingMode = $map['resourceSettingMode'];
        }

        return $model;
    }
}
