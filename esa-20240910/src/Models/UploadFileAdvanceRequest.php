<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class UploadFileAdvanceRequest extends Model
{
    /**
     * @description The website ID. You can call the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The type of the purge or prefetch task. Valid values:
     *
     *   **file** (default): purges the cache by file.
     *   **preload**: prefetches the file.
     *   **directory**: purges the cache by directory.
     *   **ignoreParams**: purges the cache by URL with specified parameters ignored.
     *
     * This parameter is required.
     *
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @description The name of the upload task.
     *
     * This parameter is required.
     *
     * @example purge_task_2024_11_11
     *
     * @var string
     */
    public $uploadTaskName;

    /**
     * @description The OSS URL of the file that contains resources to be purged or prefetched.
     *
     * This parameter is required.
     *
     * @example https://xxxxx.oss-cn-shenzhen.aliyuncs.com/test_oss_file?Expires=1708659191&OSSAccessKeyId=**********&Signature=**********
     *
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'siteId' => 'SiteId',
        'type' => 'Type',
        'uploadTaskName' => 'UploadTaskName',
        'urlObject' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uploadTaskName) {
            $res['UploadTaskName'] = $this->uploadTaskName;
        }
        if (null !== $this->urlObject) {
            $res['Url'] = $this->urlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFileAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UploadTaskName'])) {
            $model->uploadTaskName = $map['UploadTaskName'];
        }
        if (isset($map['Url'])) {
            $model->urlObject = $map['Url'];
        }

        return $model;
    }
}
