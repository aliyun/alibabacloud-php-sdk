<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class FetchFileRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $androidInstanceIdList;

    /**
     * @description The path to the file that you want to pull from the cloud phone instance.
     *
     * This parameter is required.
     *
     * @example /data/a.txt
     *
     * @var string
     */
    public $sourceFilePath;

    /**
     * @description The endpoint of the OSS bucket in which you want to store the pulled file.
     *
     * >  Set the value to an internal endpoint when the cloud phone instance and the OSS bucket are in the same region to improve upload speed without incurring public traffic fees. Sample endpoint: `oss-cn-hangzhou-internal.aliyuncs.com`. For more information, see [OSS regions and endpoints](https://help.aliyun.com/document_detail/31837.html).
     *
     * This parameter is required.
     *
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @description The type of the storage service.
     *
     * >  Currently, only OSS is supported.
     *
     * This parameter is required.
     *
     * @example OSS
     *
     * @var string
     */
    public $uploadType;

    /**
     * @description The OSS URL of the pulled file.
     *
     * >  The OSS bucket name must start with "cloudphone-saved-bucket-", for example, "cloudphone-saved-bucket-example". You must also create an OSS directory to store the backup data. Set the value for UploadUrl in this format: oss://\\<BucketName>/\\<OSSDirectoryName>.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'sourceFilePath' => 'SourceFilePath',
        'uploadEndpoint' => 'UploadEndpoint',
        'uploadType' => 'UploadType',
        'uploadUrl' => 'UploadUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            $res['AndroidInstanceIdList'] = $this->androidInstanceIdList;
        }
        if (null !== $this->sourceFilePath) {
            $res['SourceFilePath'] = $this->sourceFilePath;
        }
        if (null !== $this->uploadEndpoint) {
            $res['UploadEndpoint'] = $this->uploadEndpoint;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }
        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FetchFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = $map['AndroidInstanceIdList'];
            }
        }
        if (isset($map['SourceFilePath'])) {
            $model->sourceFilePath = $map['SourceFilePath'];
        }
        if (isset($map['UploadEndpoint'])) {
            $model->uploadEndpoint = $map['UploadEndpoint'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }
        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
