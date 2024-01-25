<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class PutAlertSettingStatusRequest extends Model
{
    /**
     * @var int
     */
    public $alertSettingId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $settingStatus;
    protected $_name = [
        'alertSettingId' => 'AlertSettingId',
        'operaUid'       => 'OperaUid',
        'settingStatus'  => 'SettingStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSettingId) {
            $res['AlertSettingId'] = $this->alertSettingId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->settingStatus) {
            $res['SettingStatus'] = $this->settingStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutAlertSettingStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSettingId'])) {
            $model->alertSettingId = $map['AlertSettingId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['SettingStatus'])) {
            $model->settingStatus = $map['SettingStatus'];
        }

        return $model;
    }
}
