<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class MountNFSRequest extends Model
{
    /**
     * @example i-bp1bzqq4rremun****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Z:
     *
     * @var string
     */
    public $mountDir;

    /**
     * @example \\0de-jup****.cn-hangzhou.nas.aliyuncs.com\
     *
     * @var string
     */
    public $nfsDir;

    /**
     * @example nfs
     *
     * @var string
     */
    public $protocolType;

    /**
     * @example /test
     *
     * @var string
     */
    public $remoteDir;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'mountDir'     => 'MountDir',
        'nfsDir'       => 'NfsDir',
        'protocolType' => 'ProtocolType',
        'remoteDir'    => 'RemoteDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
        }
        if (null !== $this->nfsDir) {
            $res['NfsDir'] = $this->nfsDir;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->remoteDir) {
            $res['RemoteDir'] = $this->remoteDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MountNFSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
        }
        if (isset($map['NfsDir'])) {
            $model->nfsDir = $map['NfsDir'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['RemoteDir'])) {
            $model->remoteDir = $map['RemoteDir'];
        }

        return $model;
    }
}
