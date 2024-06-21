<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyResponseBody\policyList\content;

use AlibabaCloud\Tea\Model;

class sourceBlockList extends Model
{
    /**
     * @example 120
     *
     * @var int
     */
    public $blockExpireSeconds;

    /**
     * @example 60
     *
     * @var int
     */
    public $everySeconds;

    /**
     * @example 5
     *
     * @var int
     */
    public $exceedLimitTimes;

    /**
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
