<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\faceInfo\pose;
use AlibabaCloud\Tea\Model;

class faceInfo extends Model
{
    /**
     * @var int
     */
    public $completeness;

    /**
     * @var int
     */
    public $faceNumber;

    /**
     * @var pose
     */
    public $pose;
    protected $_name = [
        'completeness' => 'Completeness',
        'faceNumber'   => 'FaceNumber',
        'pose'         => 'Pose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeness) {
            $res['Completeness'] = $this->completeness;
        }
        if (null !== $this->faceNumber) {
            $res['FaceNumber'] = $this->faceNumber;
        }
        if (null !== $this->pose) {
            $res['Pose'] = null !== $this->pose ? $this->pose->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Completeness'])) {
            $model->completeness = $map['Completeness'];
        }
        if (isset($map['FaceNumber'])) {
            $model->faceNumber = $map['FaceNumber'];
        }
        if (isset($map['Pose'])) {
            $model->pose = pose::fromMap($map['Pose']);
        }

        return $model;
    }
}
