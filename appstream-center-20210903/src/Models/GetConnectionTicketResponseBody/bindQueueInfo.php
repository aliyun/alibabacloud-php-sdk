<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\GetConnectionTicketResponseBody;

use AlibabaCloud\Tea\Model;

class bindQueueInfo extends Model
{
    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var int
     */
    public $remainingTimeMin;

    /**
     * @var string
     */
    public $requestKey;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var int
     */
    public $waitTimeMin;
    protected $_name = [
        'length'           => 'Length',
        'rank'             => 'Rank',
        'remainingTimeMin' => 'RemainingTimeMin',
        'requestKey'       => 'RequestKey',
        'targetId'         => 'TargetId',
        'waitTimeMin'      => 'WaitTimeMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->rank) {
            $res['Rank'] = $this->rank;
        }
        if (null !== $this->remainingTimeMin) {
            $res['RemainingTimeMin'] = $this->remainingTimeMin;
        }
        if (null !== $this->requestKey) {
            $res['RequestKey'] = $this->requestKey;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->waitTimeMin) {
            $res['WaitTimeMin'] = $this->waitTimeMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindQueueInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['Rank'])) {
            $model->rank = $map['Rank'];
        }
        if (isset($map['RemainingTimeMin'])) {
            $model->remainingTimeMin = $map['RemainingTimeMin'];
        }
        if (isset($map['RequestKey'])) {
            $model->requestKey = $map['RequestKey'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['WaitTimeMin'])) {
            $model->waitTimeMin = $map['WaitTimeMin'];
        }

        return $model;
    }
}
