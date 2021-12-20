<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateNASFileSystemResponse extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemName;

    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileSystemId'      => 'FileSystemId',
        'fileSystemName'    => 'FileSystemName',
        'mountTargetDomain' => 'MountTargetDomain',
        'officeSiteId'      => 'OfficeSiteId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('fileSystemName', $this->fileSystemName, true);
        Model::validateRequired('mountTargetDomain', $this->mountTargetDomain, true);
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemName) {
            $res['FileSystemName'] = $this->fileSystemName;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNASFileSystemResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemName'])) {
            $model->fileSystemName = $map['FileSystemName'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
