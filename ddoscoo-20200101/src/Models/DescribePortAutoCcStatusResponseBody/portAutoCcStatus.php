<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortAutoCcStatusResponseBody;

use AlibabaCloud\Tea\Model;

class portAutoCcStatus extends Model
{
    /**
     * @var string
     */
    public $switch;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $webSwitch;

    /**
     * @var string
     */
    public $webMode;
    protected $_name = [
        'switch'    => 'Switch',
        'mode'      => 'Mode',
        'webSwitch' => 'WebSwitch',
        'webMode'   => 'WebMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switch) {
            $res['Switch'] = $this->switch;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->webSwitch) {
            $res['WebSwitch'] = $this->webSwitch;
        }
        if (null !== $this->webMode) {
            $res['WebMode'] = $this->webMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portAutoCcStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Switch'])) {
            $model->switch = $map['Switch'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['WebSwitch'])) {
            $model->webSwitch = $map['WebSwitch'];
        }
        if (isset($map['WebMode'])) {
            $model->webMode = $map['WebMode'];
        }

        return $model;
    }
}
