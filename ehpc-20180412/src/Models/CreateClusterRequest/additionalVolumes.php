<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\additionalVolumes\roles;
use AlibabaCloud\Tea\Model;

class additionalVolumes extends Model
{
    /**
     * @description The mount target of the additional file system.
     *
     * Valid values of N: 1 to 10
     * @example high
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The URL that is used to download the script after the E-HPC cluster is created.
     *
     * Valid values of N: 0 to 16
     * @example /ff
     *
     * @var string
     */
    public $localDirectory;

    /**
     * @description Specifies whether not to install the agent.
     *
     *   true: The agent is not installed.
     *   false: The agent is installed.
     *
     * Default value: false
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The type of the E-HPC cluster. Set the value to PublicCloud.
     *
     * Valid values of N: 1 to 10
     * @example /test
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The remote directory on which the additional file system is mounted.
     *
     * Valid values of N: 1 to 10
     * @var roles[]
     */
    public $roles;

    /**
     * @description The mount options of the additional file system.
     *
     * Valid values of N: 1 to 10
     * @example extreme-00b88****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The type of the protocol that is used by the additional file system. Valid values:
     *
     *   NFS
     *   SMB
     *
     * Default value: NFS
     * @example -t nfs -o vers=4.0
     *
     * @var string
     */
    public $volumeMountOption;

    /**
     * @description The local directory on which the additional file system is mounted.
     *
     * Valid values of N: 1 to 10
     * @example 0088****-sihc.cn-hangzhou.extreme.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The mode configurations of the plug-in. This parameter takes effect only when the SchedulerType parameter is set to custom.
     *
     * The value must be a JSON string. The parameter contains the following parameters: pluginMod, pluginLocalPath, and pluginOssPath.
     *
     *   pluginMod: the mode of the plug-in. The following modes are supported:
     *
     *   oss: The plug-in is downloaded and decompressed from OSS to a local path. The local path is specified by the pluginLocalPath parameter.
     *   image: By default, the plug-in is stored in a pre-defined local path. The local path is specified by the pluginLocalPath parameter.
     *
     *   pluginLocalPath: the local path where the plug-in is stored. We recommend that you select a shared directory in oss mode and a non-shared directory in image mode.
     *
     *   pluginOssPath: the remote path where the plug-in is stored in OSS. This parameter takes effect only when the pluginMod parameter is set to oss.
     *
     * @example NFS
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The parameter that is used to run the script after the E-HPC cluster is created.
     *
     * Valid values of N: 0 to 16
     * @example nas
     *
     * @var string
     */
    public $volumeType;
    protected $_name = [
        'jobQueue'          => 'JobQueue',
        'localDirectory'    => 'LocalDirectory',
        'location'          => 'Location',
        'remoteDirectory'   => 'RemoteDirectory',
        'roles'             => 'Roles',
        'volumeId'          => 'VolumeId',
        'volumeMountOption' => 'VolumeMountOption',
        'volumeMountpoint'  => 'VolumeMountpoint',
        'volumeProtocol'    => 'VolumeProtocol',
        'volumeType'        => 'VolumeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->localDirectory) {
            $res['LocalDirectory'] = $this->localDirectory;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->volumeMountOption) {
            $res['VolumeMountOption'] = $this->volumeMountOption;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return additionalVolumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['LocalDirectory'])) {
            $model->localDirectory = $map['LocalDirectory'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['VolumeMountOption'])) {
            $model->volumeMountOption = $map['VolumeMountOption'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }

        return $model;
    }
}
