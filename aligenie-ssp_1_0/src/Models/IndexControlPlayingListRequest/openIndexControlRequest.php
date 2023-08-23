<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\IndexControlPlayingListRequest;

use AlibabaCloud\Tea\Model;

class openIndexControlRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @example false
     *
     * @var bool
     */
    public $needContentContinued;
    protected $_name = [
        'extendInfo'           => 'ExtendInfo',
        'index'                => 'Index',
        'needContentContinued' => 'NeedContentContinued',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->needContentContinued) {
            $res['NeedContentContinued'] = $this->needContentContinued;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openIndexControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['NeedContentContinued'])) {
            $model->needContentContinued = $map['NeedContentContinued'];
        }

        return $model;
    }
}
