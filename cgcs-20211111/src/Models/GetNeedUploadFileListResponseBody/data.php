<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\GetNeedUploadFileListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 错误信息
     *
     * @var string
     */
    public $err;

    /**
     * @description 待上传文件列表
     *
     * @var string[]
     */
    public $needUploadFileList;

    /**
     * @description 请求结果
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'err'                => 'Err',
        'needUploadFileList' => 'NeedUploadFileList',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->err) {
            $res['Err'] = $this->err;
        }
        if (null !== $this->needUploadFileList) {
            $res['NeedUploadFileList'] = $this->needUploadFileList;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Err'])) {
            $model->err = $map['Err'];
        }
        if (isset($map['NeedUploadFileList'])) {
            if (!empty($map['NeedUploadFileList'])) {
                $model->needUploadFileList = $map['NeedUploadFileList'];
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
