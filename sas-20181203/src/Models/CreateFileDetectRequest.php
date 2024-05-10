<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateFileDetectRequest extends Model
{
    /**
     * @var bool
     */
    public $decompress;

    /**
     * @var int
     */
    public $decompressMaxFileCount;

    /**
     * @var int
     */
    public $decompressMaxLayer;

    /**
     * @description The URL that is used to download the file. You can specify this parameter to trigger file detection without the need to upload the file in advance.
     *
     * @example https://xxxxxxxx.oss-cn-hangzhou-1.aliyuncs.com/xxxxx/xxxxxxxxxxxxxx?Expires=1671448125&OSSAccessKeyId=xxx
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The identifier of the file. Only MD5 hash values are supported.
     *
     * This parameter is required.
     * @example 0a212417e65c26ff133cfff28f6c****
     *
     * @var string
     */
    public $hashKey;

    /**
     * @description The key of the file that is stored in the Object Storage Service (OSS) bucket. If you specify the DownloadUrl parameter, you can leave this parameter empty. You can call the [CreateFileDetectUploadUrl](~~CreateFileDetectUploadUrl~~) operation to query the keys of files.
     *
     * @example 1/2022/06/23/15/41/16559701077444693a0c6-33b2-4cc2-a99f-9f38b8b8****
     *
     * @var string
     */
    public $ossKey;

    /**
     * @description The source IP address of the request.
     *
     * @example 115.213.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the file. Valid values:
     *
     *   **0**: unknown files
     *   **1**: binary files
     *   **2**: webshell files
     *   **4**: script files
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'decompress'             => 'Decompress',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer'     => 'DecompressMaxLayer',
        'downloadUrl'            => 'DownloadUrl',
        'hashKey'                => 'HashKey',
        'ossKey'                 => 'OssKey',
        'sourceIp'               => 'SourceIp',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->decompress) {
            $res['Decompress'] = $this->decompress;
        }
        if (null !== $this->decompressMaxFileCount) {
            $res['DecompressMaxFileCount'] = $this->decompressMaxFileCount;
        }
        if (null !== $this->decompressMaxLayer) {
            $res['DecompressMaxLayer'] = $this->decompressMaxLayer;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->hashKey) {
            $res['HashKey'] = $this->hashKey;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileDetectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Decompress'])) {
            $model->decompress = $map['Decompress'];
        }
        if (isset($map['DecompressMaxFileCount'])) {
            $model->decompressMaxFileCount = $map['DecompressMaxFileCount'];
        }
        if (isset($map['DecompressMaxLayer'])) {
            $model->decompressMaxLayer = $map['DecompressMaxLayer'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['HashKey'])) {
            $model->hashKey = $map['HashKey'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
