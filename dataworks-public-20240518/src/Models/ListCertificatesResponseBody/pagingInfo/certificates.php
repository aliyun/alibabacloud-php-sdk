<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCertificatesResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @example 1730217600000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1107550004253538
     *
     * @var string
     */
    public $createUser;

    /**
     * @example This is a file
     *
     * @var string
     */
    public $description;

    /**
     * @example 1024
     *
     * @var int
     */
    public $fileSizeInBytes;

    /**
     * @example 676303114031776
     *
     * @var int
     */
    public $id;

    /**
     * @example ca1.crt
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'description' => 'Description',
        'fileSizeInBytes' => 'FileSizeInBytes',
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSizeInBytes) {
            $res['FileSizeInBytes'] = $this->fileSizeInBytes;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSizeInBytes'])) {
            $model->fileSizeInBytes = $map['FileSizeInBytes'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
