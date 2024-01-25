<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetAlertDetailTrendDataRequest extends Model
{
    /**
     * @var int
     */
    public $abnormalId;

    /**
     * @var int
     */
    public $alertId;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'abnormalId' => 'AbnormalId',
        'alertId'    => 'AlertId',
        'beginTime'  => 'BeginTime',
        'endTime'    => 'EndTime',
        'operaUid'   => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalId) {
            $res['AbnormalId'] = $this->abnormalId;
        }
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlertDetailTrendDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalId'])) {
            $model->abnormalId = $map['AbnormalId'];
        }
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
