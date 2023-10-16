<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SubmitSupplementRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var mixed[]
     */
    public $uploadOssKeyList;
    protected $_name = [
        'content'          => 'Content',
        'id'               => 'Id',
        'operateType'      => 'OperateType',
        'uploadOssKeyList' => 'UploadOssKeyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->uploadOssKeyList) {
            $res['UploadOssKeyList'] = $this->uploadOssKeyList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSupplementRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['UploadOssKeyList'])) {
            $model->uploadOssKeyList = $map['UploadOssKeyList'];
        }

        return $model;
    }
}
