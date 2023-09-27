<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

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
     * @example EXPERT
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicResourceSetting) {
            $res['basicResourceSetting'] = null !== $this->basicResourceSetting ? $this->basicResourceSetting->toMap() : null;
        }
        if (null !== $this->expertResourceSetting) {
            $res['expertResourceSetting'] = null !== $this->expertResourceSetting ? $this->expertResourceSetting->toMap() : null;
        }
        if (null !== $this->resourceSettingMode) {
            $res['resourceSettingMode'] = $this->resourceSettingMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StreamingResourceSetting
     */
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
