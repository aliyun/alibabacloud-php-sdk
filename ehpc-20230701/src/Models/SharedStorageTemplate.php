<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models;

use AlibabaCloud\Tea\Model;

class SharedStorageTemplate extends Model
{
    /**
     * @example 008b63****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example /home
     *
     * @var string
     */
    public $mountDirectory;

    /**
     * @example -t nfs -o vers=3,nolock,noresvport
     *
     * @var string
     */
    public $mountOptions;

    /**
     * @example 008b****-sihc.cn-hangzhou.extreme.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @example /
     *
     * @var string
     */
    public $NASDirectory;

    /**
     * @example NFS
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SharedStorageTemplate
     */
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
