<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class MountNFSRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nfsDir;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $remoteDir;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'nfsDir'       => 'NfsDir',
        'mountDir'     => 'MountDir',
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
        if (null !== $this->nfsDir) {
            $res['NfsDir'] = $this->nfsDir;
        }
        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
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
        if (isset($map['NfsDir'])) {
            $model->nfsDir = $map['NfsDir'];
        }
        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
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
