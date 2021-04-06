<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\faceInfo;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\personInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var faceInfo
     */
    public $faceInfo;

    /**
     * @var personInfo
     */
    public $personInfo;

    /**
     * @var float
     */
    public $chatScore;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'faceInfo'   => 'FaceInfo',
        'personInfo' => 'PersonInfo',
        'chatScore'  => 'ChatScore',
        'threshold'  => 'Threshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceInfo) {
            $res['FaceInfo'] = null !== $this->faceInfo ? $this->faceInfo->toMap() : null;
        }
        if (null !== $this->personInfo) {
            $res['PersonInfo'] = null !== $this->personInfo ? $this->personInfo->toMap() : null;
        }
        if (null !== $this->chatScore) {
            $res['ChatScore'] = $this->chatScore;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceInfo'])) {
            $model->faceInfo = faceInfo::fromMap($map['FaceInfo']);
        }
        if (isset($map['PersonInfo'])) {
            $model->personInfo = personInfo::fromMap($map['PersonInfo']);
        }
        if (isset($map['ChatScore'])) {
            $model->chatScore = $map['ChatScore'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
