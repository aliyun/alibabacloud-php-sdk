<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\SubmitAudioTo3DAvatarVideoTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xxxx-xxx-xx-xx
     *
     * @var string
     */
    public $taskUuid;
    protected $_name = [
        'taskUuid' => 'TaskUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskUuid) {
            $res['TaskUuid'] = $this->taskUuid;
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
        if (isset($map['TaskUuid'])) {
            $model->taskUuid = $map['TaskUuid'];
        }

        return $model;
    }
}
