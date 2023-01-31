<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateDownloadUrlRequest extends Model
{
    /**
     * @example 137da36b41304bcd999a0a7895dc6881
     *
     * @var string
     */
    public $downloadTaskId;

    /**
     * @example 6f91885fa24b4c408d8f4eb392fd8ae6
     *
     * @var string
     */
    public $fileId;
    protected $_name = [
        'downloadTaskId' => 'DownloadTaskId',
        'fileId'         => 'FileId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadTaskId) {
            $res['DownloadTaskId'] = $this->downloadTaskId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDownloadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadTaskId'])) {
            $model->downloadTaskId = $map['DownloadTaskId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}
