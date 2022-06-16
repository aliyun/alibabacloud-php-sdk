<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppMonitorsRequest extends Model
{
    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var int[]
     */
    public $monitorIds;

    /**
     * @var string
     */
    public $silenceTime;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'mainUserId'  => 'MainUserId',
        'monitorIds'  => 'MonitorIds',
        'silenceTime' => 'SilenceTime',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }
        if (null !== $this->monitorIds) {
            $res['MonitorIds'] = $this->monitorIds;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppMonitorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }
        if (isset($map['MonitorIds'])) {
            if (!empty($map['MonitorIds'])) {
                $model->monitorIds = $map['MonitorIds'];
            }
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
