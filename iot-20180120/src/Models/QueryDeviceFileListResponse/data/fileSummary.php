<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceFileListResponse\data;

use AlibabaCloud\Tea\Model;

class fileSummary extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $utcCreatedOn;
    protected $_name = [
        'fileId'       => 'FileId',
        'name'         => 'Name',
        'size'         => 'Size',
        'utcCreatedOn' => 'UtcCreatedOn',
    ];

    public function validate()
    {
        Model::validateRequired('fileId', $this->fileId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('utcCreatedOn', $this->utcCreatedOn, true);
    }

    public function toMap()
    {
        $res = [];
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
     * @return fileSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
