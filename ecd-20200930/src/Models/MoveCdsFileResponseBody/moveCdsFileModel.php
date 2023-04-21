<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\MoveCdsFileResponseBody;

use AlibabaCloud\Tea\Model;

class moveCdsFileModel extends Model
{
    /**
     * @example fe307518-825a-4c8b-a69c-958f0e8a****
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @example false
     *
     * @var bool
     */
    public $exist;

    /**
     * @example 63636837e47e5a24a8a940218bef395c210e****
     *
     * @var string
     */
    public $fileId;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'exist'       => 'Exist',
        'fileId'      => 'FileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }
        if (null !== $this->exist) {
            $res['Exist'] = $this->exist;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moveCdsFileModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }
        if (isset($map['Exist'])) {
            $model->exist = $map['Exist'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}
