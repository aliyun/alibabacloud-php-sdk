<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class SharedStorageTemplate extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $mountDirectory;
    /**
     * @var string
     */
    public $mountOptions;
    /**
     * @var string
     */
    public $mountTargetDomain;
    /**
     * @var string
     */
    public $NASDirectory;
    /**
     * @var string
     */
    public $protocolType;
    protected $_name = [
        'fileSystemId'      => 'FileSystemId',
        'mountDirectory'    => 'MountDirectory',
        'mountOptions'      => 'MountOptions',
        'mountTargetDomain' => 'MountTargetDomain',
        'NASDirectory'      => 'NASDirectory',
        'protocolType'      => 'ProtocolType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->mountDirectory) {
            $res['MountDirectory'] = $this->mountDirectory;
        }

        if (null !== $this->mountOptions) {
            $res['MountOptions'] = $this->mountOptions;
        }

        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }

        if (null !== $this->NASDirectory) {
            $res['NASDirectory'] = $this->NASDirectory;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['MountDirectory'])) {
            $model->mountDirectory = $map['MountDirectory'];
        }

        if (isset($map['MountOptions'])) {
            $model->mountOptions = $map['MountOptions'];
        }

        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }

        if (isset($map['NASDirectory'])) {
            $model->NASDirectory = $map['NASDirectory'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        return $model;
    }
}
