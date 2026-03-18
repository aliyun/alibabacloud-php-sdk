<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyContentRequest\content;

use AlibabaCloud\Dara\Model;

class sourceBlockList extends Model
{
    /**
     * @var int
     */
    public $blockExpireSeconds;

    /**
     * @var int
     */
    public $everySeconds;

    /**
     * @var int
     */
    public $exceedLimitTimes;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'blockExpireSeconds' => 'BlockExpireSeconds',
        'everySeconds' => 'EverySeconds',
        'exceedLimitTimes' => 'ExceedLimitTimes',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
