<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PageQuerySpeechBroadcastHourRequest extends Model
{
    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see [Overview](~~356505~~) of IoT instances.
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries per page. Default value: 10. Valid values: 1 to 2000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of **PageToken**.
     *
     * For example, if you want to query the results on Page n, you must set PageToken to the token that you obtained when you queried the results on Page n - 1.
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $pageToken;

    /**
     * @description The end time of the hour in which you want to query data. Example: 2020090919, which specifies 19:00 on September 9, 2020.
     *
     * @example 2020090919
     *
     * @var string
     */
    public $queryDateTimeHour;

    /**
     * @description The code of the speech sharing task.
     *
     * You can obtain the **code** on the **Shared Corpus Management** page of **Speech Sending Voice Broadcasting Service**.
     * @example ebed9280_ba25_48df_80c2_****
     *
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
