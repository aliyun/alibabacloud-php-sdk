<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PreviousAndNextControlRequest;

use AlibabaCloud\Dara\Model;

class openControlPlayingListRequest extends Model
{
    /**
     * @var string
     */
    public $cmd;

    /**
     * @var mixed[]
     */
    public $extendInfo;

    /**
     * @var bool
     */
    public $isFromDevice;
    protected $_name = [
        'cmd' => 'Cmd',
        'extendInfo' => 'ExtendInfo',
        'isFromDevice' => 'IsFromDevice',
    ];

    public function validate()
    {
        if (\is_array($this->extendInfo)) {
            Model::validateArray($this->extendInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }

        if (null !== $this->extendInfo) {
            if (\is_array($this->extendInfo)) {
                $res['ExtendInfo'] = [];
                foreach ($this->extendInfo as $key1 => $value1) {
                    $res['ExtendInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->isFromDevice) {
            $res['IsFromDevice'] = $this->isFromDevice;
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
        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }

        if (isset($map['ExtendInfo'])) {
            if (!empty($map['ExtendInfo'])) {
                $model->extendInfo = [];
                foreach ($map['ExtendInfo'] as $key1 => $value1) {
                    $model->extendInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['IsFromDevice'])) {
            $model->isFromDevice = $map['IsFromDevice'];
        }

        return $model;
    }
}
