<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MonitorExaminationResponseBody\data\faceInfo\pose;

class faceInfo extends Model
{
    /**
     * @var float
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
        'faceNumber' => 'FaceNumber',
        'pose' => 'Pose',
    ];

    public function validate()
    {
        if (null !== $this->pose) {
            $this->pose->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeness) {
            $res['Completeness'] = $this->completeness;
        }

        if (null !== $this->faceNumber) {
            $res['FaceNumber'] = $this->faceNumber;
        }

        if (null !== $this->pose) {
            $res['Pose'] = null !== $this->pose ? $this->pose->toArray($noStream) : $this->pose;
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
