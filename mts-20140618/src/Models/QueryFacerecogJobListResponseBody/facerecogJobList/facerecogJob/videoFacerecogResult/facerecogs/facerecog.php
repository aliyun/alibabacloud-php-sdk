<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult\facerecogs;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult\facerecogs\facerecog\faces;
use AlibabaCloud\Tea\Model;

class facerecog extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var faces
     */
    public $faces;
    protected $_name = [
        'time'  => 'Time',
        'faces' => 'Faces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->faces) {
            $res['Faces'] = null !== $this->faces ? $this->faces->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return facerecog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Faces'])) {
            $model->faces = faces::fromMap($map['Faces']);
        }

        return $model;
    }
}
