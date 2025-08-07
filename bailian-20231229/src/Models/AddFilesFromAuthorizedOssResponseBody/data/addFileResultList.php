<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssResponseBody\data;

use AlibabaCloud\Dara\Model;

class addFileResultList extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'fileId' => 'FileId',
        'msg' => 'Msg',
        'ossKey' => 'OssKey',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
