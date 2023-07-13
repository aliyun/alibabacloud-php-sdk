<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateSoundCodeRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $duration;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $soundCode;

    /**
     * @example www.taobao.com
     *
     * @var string
     */
    public $soundCodeContent;
    protected $_name = [
        'duration'         => 'Duration',
        'iotInstanceId'    => 'IotInstanceId',
        'name'             => 'Name',
        'soundCode'        => 'SoundCode',
        'soundCodeContent' => 'SoundCodeContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->soundCode) {
            $res['SoundCode'] = $this->soundCode;
        }
        if (null !== $this->soundCodeContent) {
            $res['SoundCodeContent'] = $this->soundCodeContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSoundCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SoundCode'])) {
            $model->soundCode = $map['SoundCode'];
        }
        if (isset($map['SoundCodeContent'])) {
            $model->soundCodeContent = $map['SoundCodeContent'];
        }

        return $model;
    }
}
