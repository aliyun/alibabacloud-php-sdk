<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCdsFileResponseBody\fileModel;
use AlibabaCloud\Tea\Model;

class CreateCdsFileResponseBody extends Model
{
    /**
     * @var fileModel
     */
    public $fileModel;

    /**
     * @example 2BAFE05D-FFB9-5938-96D0-08017DB9****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileModel' => 'FileModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileModel) {
            $res['FileModel'] = null !== $this->fileModel ? $this->fileModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCdsFileResponseBody
     */
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
