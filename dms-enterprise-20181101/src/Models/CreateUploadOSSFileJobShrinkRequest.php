<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadOSSFileJobShrinkRequest extends Model
{
    /**
     * @description The name of the file.
     *
     * This parameter is required.
     * @example test.sql
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The purpose of the file upload task. Valid values:
     *
     *   **datacorrect**: The file is uploaded to change data.
     *   **order_info_attachment**: The file is uploaded as an attachment in a ticket.
     *   **big-file**: The file is uploaded to import multiple data records at a time.
     *   **sqlreview**: The file is uploaded for SQL review.
     *
     * This parameter is required.
     * @example datacorrect
     *
     * @var string
     */
    public $fileSource;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html) topic.
     * @example -1
     *
     * @var int
     */
    public $tid;

    /**
     * @description The information about the OSS file to be uploaded.
     *
     * This parameter is required.
     * @var string
     */
    public $uploadTargetShrink;
    protected $_name = [
        'fileName'           => 'FileName',
        'fileSource'         => 'FileSource',
        'tid'                => 'Tid',
        'uploadTargetShrink' => 'UploadTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSource) {
            $res['FileSource'] = $this->fileSource;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->uploadTargetShrink) {
            $res['UploadTarget'] = $this->uploadTargetShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadOSSFileJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSource'])) {
            $model->fileSource = $map['FileSource'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UploadTarget'])) {
            $model->uploadTargetShrink = $map['UploadTarget'];
        }

        return $model;
    }
}
