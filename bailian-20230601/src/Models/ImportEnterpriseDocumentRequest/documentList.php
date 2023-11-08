<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models\ImportEnterpriseDocumentRequest;

use AlibabaCloud\Tea\Model;

class documentList extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $bizId;

    /**
     * @example false
     *
     * @var bool
     */
    public $fileCanDownload;

    /**
     * @example xxx.com
     *
     * @var string
     */
    public $fileLink;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @example xxx.com
     *
     * @var string
     */
    public $filePreviewLink;
    protected $_name = [
        'bizId'           => 'BizId',
        'fileCanDownload' => 'FileCanDownload',
        'fileLink'        => 'FileLink',
        'fileName'        => 'FileName',
        'filePreviewLink' => 'FilePreviewLink',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->fileCanDownload) {
            $res['FileCanDownload'] = $this->fileCanDownload;
        }
        if (null !== $this->fileLink) {
            $res['FileLink'] = $this->fileLink;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePreviewLink) {
            $res['FilePreviewLink'] = $this->filePreviewLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FileCanDownload'])) {
            $model->fileCanDownload = $map['FileCanDownload'];
        }
        if (isset($map['FileLink'])) {
            $model->fileLink = $map['FileLink'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePreviewLink'])) {
            $model->filePreviewLink = $map['FilePreviewLink'];
        }

        return $model;
    }
}
