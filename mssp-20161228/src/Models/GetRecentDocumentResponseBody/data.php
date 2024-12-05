<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetRecentDocumentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Primary key ID.
     *
     * @example 360491
     *
     * @var int
     */
    public $id;

    /**
     * @description Document name
     *
     * @example 文档名称测试
     *
     * @var string
     */
    public $name;

    /**
     * @description Upload time.
     *
     * @example 2023-03-20 14:30:38
     *
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'id'         => 'Id',
        'name'       => 'Name',
        'uploadTime' => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
