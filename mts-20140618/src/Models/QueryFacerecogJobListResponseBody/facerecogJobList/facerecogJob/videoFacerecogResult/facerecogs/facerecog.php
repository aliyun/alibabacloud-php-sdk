<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult\facerecogs;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult\facerecogs\facerecog\faces;
use AlibabaCloud\Tea\Model;

class facerecog extends Model
{
    /**
     * @var faces
     */
    public $faces;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'faces' => 'Faces',
        'time'  => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faces) {
            $res['Faces'] = null !== $this->faces ? $this->faces->toMap() : null;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Faces'])) {
            $model->faces = faces::fromMap($map['Faces']);
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
