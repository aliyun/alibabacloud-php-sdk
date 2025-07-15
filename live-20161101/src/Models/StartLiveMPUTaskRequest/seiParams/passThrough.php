<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\seiParams;

use AlibabaCloud\Tea\Model;

class passThrough extends Model
{
    /**
     * @description Specifies whether to include the SEI in an IDR frame. Valid values:
     *
     *   **0**: does not include the SEI.
     *   **1**: includes the SEI.
     *
     * @example 0
     *
     * @var string
     */
    public $followIdr;

    /**
     * @description The interval at which the SEI is sent. Valid values: [1000,5000]. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var string
     */
    public $interval;

    /**
     * @description The payload content of the SEI.
     *
     * @example yourPayloadContent
     *
     * @var string
     */
    public $payloadContent;

    /**
     * @description The key of the payload content of the SEI. If you do not specify this parameter, the default value udd is used.
     *
     * @example yourPayloadContentKey
     *
     * @var string
     */
    public $payloadContentKey;
    protected $_name = [
        'followIdr' => 'FollowIdr',
        'interval' => 'Interval',
        'payloadContent' => 'PayloadContent',
        'payloadContentKey' => 'PayloadContentKey',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->followIdr) {
            $res['FollowIdr'] = $this->followIdr;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->payloadContent) {
            $res['PayloadContent'] = $this->payloadContent;
        }
        if (null !== $this->payloadContentKey) {
            $res['PayloadContentKey'] = $this->payloadContentKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return passThrough
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FollowIdr'])) {
            $model->followIdr = $map['FollowIdr'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['PayloadContent'])) {
            $model->payloadContent = $map['PayloadContent'];
        }
        if (isset($map['PayloadContentKey'])) {
            $model->payloadContentKey = $map['PayloadContentKey'];
        }

        return $model;
    }
}
