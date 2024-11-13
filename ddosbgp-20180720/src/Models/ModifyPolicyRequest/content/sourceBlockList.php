<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content;

use AlibabaCloud\Tea\Model;

class sourceBlockList extends Model
{
    /**
     * @description The validity period of the blacklist to which the source IP address is added. Unit: seconds.
     *
     * This parameter is required.
     * @example 120
     *
     * @var int
     */
    public $blockExpireSeconds;

    /**
     * @description The statistical period during which the system collects data on source IP addresses to determine whether to add the source IP addresses to the blacklist. Unit: seconds.
     *
     * This parameter is required.
     * @example 60
     *
     * @var int
     */
    public $everySeconds;

    /**
     * @description The number of times that the source IP address exceeds a limit in a statistical period.
     *
     * This parameter is required.
     * @example 5
     *
     * @var int
     */
    public $exceedLimitTimes;

    /**
     * @description The type of the source rate limit. Valid values:
     *
     *   **3**: the pps limit on source IP addresses.
     *   **4**: the bandwidth limit on source IP addresses.
     *   **5**: the pps limit on source SYN packets.
     *   **6**: the bandwidth limit on source SYN packets.
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'blockExpireSeconds' => 'BlockExpireSeconds',
        'everySeconds'       => 'EverySeconds',
        'exceedLimitTimes'   => 'ExceedLimitTimes',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockExpireSeconds) {
            $res['BlockExpireSeconds'] = $this->blockExpireSeconds;
        }
        if (null !== $this->everySeconds) {
            $res['EverySeconds'] = $this->everySeconds;
        }
        if (null !== $this->exceedLimitTimes) {
            $res['ExceedLimitTimes'] = $this->exceedLimitTimes;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceBlockList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockExpireSeconds'])) {
            $model->blockExpireSeconds = $map['BlockExpireSeconds'];
        }
        if (isset($map['EverySeconds'])) {
            $model->everySeconds = $map['EverySeconds'];
        }
        if (isset($map['ExceedLimitTimes'])) {
            $model->exceedLimitTimes = $map['ExceedLimitTimes'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
