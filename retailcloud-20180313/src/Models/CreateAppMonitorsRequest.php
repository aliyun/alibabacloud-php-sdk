<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateAppMonitorsRequest extends Model
{
    /**
     * @var int
     */
    public $alarmTemplateId;

    /**
     * @var int[]
     */
    public $appIds;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $silenceTime;
    protected $_name = [
        'alarmTemplateId' => 'AlarmTemplateId',
        'appIds'          => 'AppIds',
        'envType'         => 'EnvType',
        'mainUserId'      => 'MainUserId',
        'silenceTime'     => 'SilenceTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmTemplateId) {
            $res['AlarmTemplateId'] = $this->alarmTemplateId;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppMonitorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmTemplateId'])) {
            $model->alarmTemplateId = $map['AlarmTemplateId'];
        }
        if (isset($map['AppIds'])) {
            if (!empty($map['AppIds'])) {
                $model->appIds = $map['AppIds'];
            }
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }

        return $model;
    }
}
