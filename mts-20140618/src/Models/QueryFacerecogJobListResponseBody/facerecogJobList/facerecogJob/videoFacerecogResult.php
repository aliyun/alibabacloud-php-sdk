<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult\facerecogs;
use AlibabaCloud\Tea\Model;

class videoFacerecogResult extends Model
{
    /**
     * @var facerecogs
     */
    public $facerecogs;
    protected $_name = [
        'facerecogs' => 'Facerecogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facerecogs) {
            $res['Facerecogs'] = null !== $this->facerecogs ? $this->facerecogs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoFacerecogResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Facerecogs'])) {
            $model->facerecogs = facerecogs::fromMap($map['Facerecogs']);
        }

        return $model;
    }
}
