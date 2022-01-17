<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class UploadCommodityFileRequest extends Model
{
    /**
     * @var string
     */
    public $fileContentType;

    /**
     * @var string
     */
    public $fileResource;

    /**
     * @var string
     */
    public $fileResourceType;
    protected $_name = [
        'fileContentType'  => 'FileContentType',
        'fileResource'     => 'FileResource',
        'fileResourceType' => 'FileResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileContentType) {
            $res['FileContentType'] = $this->fileContentType;
        }
        if (null !== $this->fileResource) {
            $res['FileResource'] = $this->fileResource;
        }
        if (null !== $this->fileResourceType) {
            $res['FileResourceType'] = $this->fileResourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCommodityFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileContentType'])) {
            $model->fileContentType = $map['FileContentType'];
        }
        if (isset($map['FileResource'])) {
            $model->fileResource = $map['FileResource'];
        }
        if (isset($map['FileResourceType'])) {
            $model->fileResourceType = $map['FileResourceType'];
        }

        return $model;
    }
}
