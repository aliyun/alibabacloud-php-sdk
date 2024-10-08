<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UploadFileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description This parameter is required.
     *
     * @example file
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example purge_task_2024_11_11
     *
     * @var string
     */
    public $uploadTaskName;

    /**
     * @description This parameter is required.
     *
     * @example https://xxxxx.oss-cn-shenzhen.aliyuncs.com/test_oss_file?Expires=1708659191&OSSAccessKeyId=**********&Signature=**********
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'siteId'         => 'SiteId',
        'type'           => 'Type',
        'uploadTaskName' => 'UploadTaskName',
        'url'            => 'Url',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFileRequest
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
            $model->url = $map['Url'];
        }

        return $model;
    }
}
