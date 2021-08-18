<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models\DescribeFaultDiagnosisUserListResponseBody\userList;

use AlibabaCloud\Tea\Model;

class faultList extends Model
{
    /**
     * @description 异常类型 JOIN_SLOW：进频道慢 AUDIO_STUCK：音频卡顿 VIDEO_STUCK：视频卡顿 VIDEO_VAGUE：视频模糊 HIGH_DELAY：通话延迟高 FIRST_FRAME_SLOW：接收首屏慢
     *
     * @var string
     */
    public $faultType;
    protected $_name = [
        'faultType' => 'FaultType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faultType) {
            $res['FaultType'] = $this->faultType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaultType'])) {
            $model->faultType = $map['FaultType'];
        }

        return $model;
    }
}
