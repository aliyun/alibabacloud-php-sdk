<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The download URL of the file.
     *
     * @example http://iotx-file-store.oss-cn-shanghai.aliyuncs.com/device_file/A849E4E5CFF64804A18D9384AC9D****\/aGEKIpp5NAGxdP2oo90000****\/testFile3.txt?Expires=1553162075&OSSAccessKeyId=LTAIYLScbHiV****&Signature=%2F88xdEFPukJ****%2F8****%2Bdv3io%3D
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The ID of the file.
     *
     * @example 6UCo1SqbqnQEoh9aKqDQ01****
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The name of the file.
     *
     * @example testFile3.txt
     *
     * @var string
     */
    public $name;

    /**
     * @description The size of the file. Unit: KB.
     *
     * @example 102400
     *
     * @var string
     */
    public $size;

    /**
     * @description The time when the file was created.
     *
     * @example 2019-03-21T08:45:42.000Z
     *
     * @var string
     */
    public $utcCreatedOn;
    protected $_name = [
        'downloadUrl'  => 'DownloadUrl',
        'fileId'       => 'FileId',
        'name'         => 'Name',
        'size'         => 'Size',
        'utcCreatedOn' => 'UtcCreatedOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->utcCreatedOn) {
            $res['UtcCreatedOn'] = $this->utcCreatedOn;
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
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['UtcCreatedOn'])) {
            $model->utcCreatedOn = $map['UtcCreatedOn'];
        }

        return $model;
    }
}
