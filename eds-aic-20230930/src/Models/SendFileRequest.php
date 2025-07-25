<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SendFileRequest extends Model
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
     * @description The path to which you want to upload the pushed file in the cloud phone instance.
     *
     * This parameter is required.
     *
     * @example /data
     *
     * @var string
     */
    public $sourceFilePath;

    /**
     * @description The name of the file uploaded from the Object Storage Service (OSS) to the cloud phone instance.
     *
     * >  If UploadType is set to OSS, you must specify TargetFileName. If TargetFileName is empty, the file uploaded from the OSS bucket to the cloud phone instance retains its original name. If TargetFileName is provided with a value, the uploaded file in the SourceFilePath directory uses the specified name (TargetFileName). If UploadType is set to DOWNLOAD_URL, TargetFileName does not take effect.
     *
     * @example test.txt
     *
     * @var string
     */
    public $targetFileName;

    /**
     * @description The endpoint of the OSS bucket in which the file is stored.
     *
     * >  Set the value to an internal endpoint when the cloud phone instance and the OSS bucket are in the same region to improve transfer speed without incurring public traffic fees. Sample endpoint: `oss-cn-hangzhou-internal.aliyuncs.com`. For more information, see [OSS regions and endpoints](https://help.aliyun.com/document_detail/31837.html).
     *
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @description The storage type of the file that you want to upload.
     *
     *   Set the value to OSS.
     *
     * This parameter is required.
     *
     * @example OSS
     *
     * @var string
     */
    public $uploadType;

    /**
     * @description The OSS URL of the file.
     *
     * >  The OSS bucket name must start with "cloudphone-saved-bucket-", for example, "cloudphone-saved-bucket-example". You must also create an OSS directory to store the backup data. Set the value for UploadUrl in this format: oss://\\<BucketName>/\\<OSSDirectoryName>\\<FileName>.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'sourceFilePath' => 'SourceFilePath',
        'targetFileName' => 'TargetFileName',
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
        if (null !== $this->targetFileName) {
            $res['TargetFileName'] = $this->targetFileName;
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
     * @return SendFileRequest
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
        if (isset($map['TargetFileName'])) {
            $model->targetFileName = $map['TargetFileName'];
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
