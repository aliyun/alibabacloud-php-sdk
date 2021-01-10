<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFacerecogJobListResponseBody\facerecogJobList\facerecogJob;
use AlibabaCloud\Tea\Model;

class facerecogJobList extends Model
{
    /**
     * @var facerecogJob[]
     */
    public $facerecogJob;
    protected $_name = [
        'facerecogJob' => 'FacerecogJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->facerecogJob) {
            $res['FacerecogJob'] = [];
            if (null !== $this->facerecogJob && \is_array($this->facerecogJob)) {
                $n = 0;
                foreach ($this->facerecogJob as $item) {
                    $res['FacerecogJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return facerecogJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FacerecogJob'])) {
            if (!empty($map['FacerecogJob'])) {
                $model->facerecogJob = [];
                $n                   = 0;
                foreach ($map['FacerecogJob'] as $item) {
                    $model->facerecogJob[$n++] = null !== $item ? facerecogJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
