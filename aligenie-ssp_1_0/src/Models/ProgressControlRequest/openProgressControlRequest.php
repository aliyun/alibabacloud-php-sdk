<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ProgressControlRequest;

use AlibabaCloud\Tea\Model;

class openProgressControlRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var int
     */
    public $progress;
    protected $_name = [
        'extendInfo' => 'ExtendInfo',
        'progress'   => 'Progress',
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
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openProgressControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
