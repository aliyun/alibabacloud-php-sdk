<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob\videoFacerecogResult\facerecogs\facerecog;
use AlibabaCloud\Tea\Model;

class facerecogs extends Model
{
    /**
     * @var facerecog[]
     */
    public $facerecog;
    protected $_name = [
        'facerecog' => 'Facerecog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facerecog) {
            $res['Facerecog'] = [];
            if (null !== $this->facerecog && \is_array($this->facerecog)) {
                $n = 0;
                foreach ($this->facerecog as $item) {
                    $res['Facerecog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return facerecogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Facerecog'])) {
            if (!empty($map['Facerecog'])) {
                $model->facerecog = [];
                $n                = 0;
                foreach ($map['Facerecog'] as $item) {
                    $model->facerecog[$n++] = null !== $item ? facerecog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
