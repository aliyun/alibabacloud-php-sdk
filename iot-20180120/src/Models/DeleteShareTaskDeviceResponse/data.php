<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\DeleteShareTaskDeviceResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $progressId;
    protected $_name = [
        'progress'   => 'Progress',
        'progressId' => 'ProgressId',
    ];

    public function validate()
    {
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('progressId', $this->progressId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->progressId) {
            $res['ProgressId'] = $this->progressId;
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
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProgressId'])) {
            $model->progressId = $map['ProgressId'];
        }

        return $model;
    }
}
