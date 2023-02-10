<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\DeleteDeviceSpeechRequest;

use AlibabaCloud\Tea\Model;

class deviceSpeechList extends Model
{
    /**
     * @example wav
     *
     * @var string
     */
    public $audioFormat;

    /**
     * @example identifying
     *
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'audioFormat' => 'AudioFormat',
        'bizCode'     => 'BizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFormat) {
            $res['AudioFormat'] = $this->audioFormat;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceSpeechList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFormat'])) {
            $model->audioFormat = $map['AudioFormat'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
