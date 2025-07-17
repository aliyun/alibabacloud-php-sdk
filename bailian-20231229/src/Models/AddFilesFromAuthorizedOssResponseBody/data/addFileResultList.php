<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssResponseBody\data;

use AlibabaCloud\Tea\Model;

class addFileResultList extends Model
{
    /**
     * @example file_809f469a59ac449586ec692576xxxxx_102248XXX
     *
     * @var string
     */
    public $fileId;

    /**
     * @example size too large
     *
     * @var string
     */
    public $msg;

    /**
     * @example root/path/this_is_temp_xxxx.pdf
     *
     * @var string
     */
    public $ossKey;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileId' => 'FileId',
        'msg' => 'Msg',
        'ossKey' => 'OssKey',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return addFileResultList
     */
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
