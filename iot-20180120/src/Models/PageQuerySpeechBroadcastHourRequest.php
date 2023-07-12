<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PageQuerySpeechBroadcastHourRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageToken;

    /**
     * @var string
     */
    public $queryDateTimeHour;

    /**
     * @var string
     */
    public $shareTaskCode;
    protected $_name = [
        'iotInstanceId'     => 'IotInstanceId',
        'pageSize'          => 'PageSize',
        'pageToken'         => 'PageToken',
        'queryDateTimeHour' => 'QueryDateTimeHour',
        'shareTaskCode'     => 'ShareTaskCode',
    ];

    public function validate()
    {
        Model::validateRequired('queryDateTimeHour', $this->queryDateTimeHour, true);
        Model::validateRequired('shareTaskCode', $this->shareTaskCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['PageToken'] = $this->pageToken;
        }
        if (null !== $this->queryDateTimeHour) {
            $res['QueryDateTimeHour'] = $this->queryDateTimeHour;
        }
        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageQuerySpeechBroadcastHourRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageToken'])) {
            $model->pageToken = $map['PageToken'];
        }
        if (isset($map['QueryDateTimeHour'])) {
            $model->queryDateTimeHour = $map['QueryDateTimeHour'];
        }
        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }

        return $model;
    }
}
