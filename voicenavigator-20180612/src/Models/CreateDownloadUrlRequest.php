<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class CreateDownloadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $downloadTaskId;
    /**
     * @var string
     */
    public $fileId;
    protected $_name = [
        'downloadTaskId' => 'DownloadTaskId',
        'fileId'         => 'FileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
