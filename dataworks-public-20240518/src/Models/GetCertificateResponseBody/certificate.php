<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class certificate extends Model
{
    /**
     * @description The time when the certificate file was created. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1730217600000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the user who created the certificate file.
     *
     * @example 1107550004253538
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The description.
     *
     * @example This is a file
     *
     * @var string
     */
    public $description;

    /**
     * @description The size of the certificate file, in bytes.
     *
     * @example 77549
     *
     * @var int
     */
    public $fileSizeInBytes;

    /**
     * @description The ID of the certificate file.
     *
     * @example 676303114031776
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the certificate file.
     *
     * @example ca1.crt
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the workspace to which the certificate file belongs.
     *
     * @example 177161
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'description' => 'Description',
        'fileSizeInBytes' => 'FileSizeInBytes',
        'id' => 'Id',
        'name' => 'Name',
        'projectId' => 'ProjectId',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificate
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
