<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateCdnDeliverTaskResponseBody extends Model
{
    /**
     * @description **Fields of the ReDatas parameter**
     *
     * | conditions | ConDatas[] | No | The filter conditions for the operations report. |
     *
     **Fields of the ConDatas parameter**
     *
     * | value | String[] | No | The array of field values. |
     *
     **Fields of the email parameter**
     *
     * | to | String[] | Yes | The email addresses to which operations reports are sent. |
     *
     **Fields of the Deliver parameter**
     *
     * | to | String[] | Yes | The email addresses to which operations reports are sent. |
     *
     **Fields of the Schedule parameter**
     *
     * | crontab | String | Yes | The period during which the operations reports are tracked. |
     * | frequency | String | Yes | The interval at which the reports are sent. Valid values:<br/>**h**: every hour <br/>**d**: every day <br/>**w**: every week |
     * | status | String | No | The status of the tracking task. Valid values:<br/>**enable**: enabled<br/>**disable**: disabled |
     * | effectiveEnd | String | No | The end time of the tracking task. |
     * @example 1025
     *
     * @var string
     */
    public $deliverId;

    /**
     * @description Creates a tracking task that generates operations reports. The tracking task sends operations reports to a specified email address based on a specified schedule.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliverId' => 'DeliverId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCdnDeliverTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
