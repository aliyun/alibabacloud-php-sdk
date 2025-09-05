<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\faceInfo;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\personInfo;

class data extends Model
{
    /**
     * @var float
     */
    public $chatScore;

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
    public $threshold;
    protected $_name = [
        'chatScore' => 'ChatScore',
        'faceInfo' => 'FaceInfo',
        'personInfo' => 'PersonInfo',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        if (null !== $this->faceInfo) {
            $this->faceInfo->validate();
        }
        if (null !== $this->personInfo) {
            $this->personInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatScore) {
            $res['ChatScore'] = $this->chatScore;
        }

        if (null !== $this->faceInfo) {
            $res['FaceInfo'] = null !== $this->faceInfo ? $this->faceInfo->toArray($noStream) : $this->faceInfo;
        }

        if (null !== $this->personInfo) {
            $res['PersonInfo'] = null !== $this->personInfo ? $this->personInfo->toArray($noStream) : $this->personInfo;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['ChatScore'])) {
            $model->chatScore = $map['ChatScore'];
        }

        if (isset($map['FaceInfo'])) {
            $model->faceInfo = faceInfo::fromMap($map['FaceInfo']);
        }

        if (isset($map['PersonInfo'])) {
            $model->personInfo = personInfo::fromMap($map['PersonInfo']);
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
