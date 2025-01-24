<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileResponseBody\fileModel;

class CreateCdsFileResponseBody extends Model
{
    /**
     * @var fileModel
     */
    public $fileModel;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileModel' => 'FileModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->fileModel) {
            $this->fileModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileModel) {
            $res['FileModel'] = null !== $this->fileModel ? $this->fileModel->toArray($noStream) : $this->fileModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FileModel'])) {
            $model->fileModel = fileModel::fromMap($map['FileModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
