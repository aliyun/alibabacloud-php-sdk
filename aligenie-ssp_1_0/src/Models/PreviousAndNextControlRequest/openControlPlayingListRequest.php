<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlRequest;

use AlibabaCloud\Tea\Model;

class openControlPlayingListRequest extends Model
{
    /**
     * @example NEXT
     *
     * @var string
     */
    public $cmd;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @example false
     *
     * @var bool
     */
    public $isFromDevice;
    protected $_name = [
        'cmd'          => 'Cmd',
        'extendInfo'   => 'ExtendInfo',
        'isFromDevice' => 'IsFromDevice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->isFromDevice) {
            $res['IsFromDevice'] = $this->isFromDevice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openControlPlayingListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['IsFromDevice'])) {
            $model->isFromDevice = $map['IsFromDevice'];
        }

        return $model;
    }
}
