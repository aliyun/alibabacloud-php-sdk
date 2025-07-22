<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetLifecycleRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The number of sessions to query.
     *
     * @example 1
     *
     * @var int
     */
    public $limit;

    /**
     * @description The sorting order of the results. Valid values:
     *
     *   ASC: sorted by time in ascending order.
     *   DESC: sorted by time in descending order.
     *
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @description A session refers to the process of an instance from startup to failure or shutdown. The sessionNumber indicates the offset value for the instance\\"s session sequence.
     *
     * @example 1
     *
     * @var int
     */
    public $sessionNumber;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The token used to share the URL.
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'endTime' => 'EndTime',
        'limit' => 'Limit',
        'order' => 'Order',
        'sessionNumber' => 'SessionNumber',
        'startTime' => 'StartTime',
        'token' => 'Token',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->sessionNumber) {
            $res['SessionNumber'] = $this->sessionNumber;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLifecycleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['SessionNumber'])) {
            $model->sessionNumber = $map['SessionNumber'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
