<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ResultUserMuteSettingsValue;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var ResultUserMuteSettingsValue[]
     */
    public $userMuteSettings;
    protected $_name = [
        'userMuteSettings' => 'UserMuteSettings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userMuteSettings) {
            $res['UserMuteSettings'] = [];
            if (null !== $this->userMuteSettings && \is_array($this->userMuteSettings)) {
                foreach ($this->userMuteSettings as $key => $val) {
                    $res['UserMuteSettings'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserMuteSettings'])) {
            $model->userMuteSettings = $map['UserMuteSettings'];
        }

        return $model;
    }
}
