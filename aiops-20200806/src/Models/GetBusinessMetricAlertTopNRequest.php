<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetBusinessMetricAlertTopNRequest extends Model
{
    /**
     * @var string
     */
    public $alertType;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $topNum;
    protected $_name = [
        'alertType' => 'AlertType',
        'eventId'   => 'EventId',
        'operaUid'  => 'OperaUid',
        'topNum'    => 'TopNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->topNum) {
            $res['TopNum'] = $this->topNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBusinessMetricAlertTopNRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['TopNum'])) {
            $model->topNum = $map['TopNum'];
        }

        return $model;
    }
}
