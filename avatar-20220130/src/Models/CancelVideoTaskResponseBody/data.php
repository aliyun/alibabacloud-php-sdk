<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\CancelVideoTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $failReason;

    /**
     * @example true
     *
     * @var bool
     */
    public $isCancel;

    /**
     * @example xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $taskUuid;
    protected $_name = [
        'failReason' => 'FailReason',
        'isCancel'   => 'IsCancel',
        'taskUuid'   => 'TaskUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }
        if (null !== $this->isCancel) {
            $res['IsCancel'] = $this->isCancel;
        }
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
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }
        if (isset($map['IsCancel'])) {
            $model->isCancel = $map['IsCancel'];
        }
        if (isset($map['TaskUuid'])) {
            $model->taskUuid = $map['TaskUuid'];
        }

        return $model;
    }
}
