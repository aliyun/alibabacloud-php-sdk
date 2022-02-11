<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddFileInfoRequest extends Model
{
    /**
     * @description 应用
     *
     * @var string
     */
    public $appId;

    /**
     * @description 文件业务类型
     *
     * @var int
     */
    public $businessType;

    /**
     * @description 文件类型
     *
     * @var int
     */
    public $fileType;

    /**
     * @description 文件oss地址
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description 文件标题
     *
     * @var string
     */
    public $filename;

    /**
     * @description 媒资Id
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'appId'        => 'AppId',
        'businessType' => 'BusinessType',
        'fileType'     => 'FileType',
        'fileUrl'      => 'FileUrl',
        'filename'     => 'Filename',
        'mediaId'      => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFileInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
