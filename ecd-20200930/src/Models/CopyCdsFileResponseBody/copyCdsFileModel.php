<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CopyCdsFileResponseBody;

use AlibabaCloud\Dara\Model;

class copyCdsFileModel extends Model
{
    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $fileId;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'fileId' => 'FileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
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
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}
