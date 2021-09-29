<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCameraShootingAttachmentsResponseBody;

use AlibabaCloud\Tea\Model;

class attachments extends Model
{
    /**
     * @description 主键id
     *
     * @var int
     */
    public $id;

    /**
     * @description 文件id
     *
     * @var string
     */
    public $fileId;

    /**
     * @description 文件类型，0-图片，1-视频
     *
     * @var int
     */
    public $fileType;

    /**
     * @description 文件名
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 文件长度，单位为字节
     *
     * @var int
     */
    public $fileLength;

    /**
     * @description 拍摄时间
     *
     * @var int
     */
    public $shootingTime;

    /**
     * @description 附件地址
     *
     * @var string
     */
    public $downloadUrl;
    protected $_name = [
        'id'           => 'Id',
        'fileId'       => 'FileId',
        'fileType'     => 'FileType',
        'fileName'     => 'FileName',
        'fileLength'   => 'FileLength',
        'shootingTime' => 'ShootingTime',
        'downloadUrl'  => 'DownloadUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileLength) {
            $res['FileLength'] = $this->fileLength;
        }
        if (null !== $this->shootingTime) {
            $res['ShootingTime'] = $this->shootingTime;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileLength'])) {
            $model->fileLength = $map['FileLength'];
        }
        if (isset($map['ShootingTime'])) {
            $model->shootingTime = $map['ShootingTime'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        return $model;
    }
}
