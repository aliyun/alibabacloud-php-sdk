<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\configFileVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\diskVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\emptyDirVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\flexVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\hostPathVolume;
use AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume\NFSVolume;
use AlibabaCloud\Tea\Model;

class volume extends Model
{
    /**
     * @var configFileVolume
     */
    public $configFileVolume;

    /**
     * @var diskVolume
     */
    public $diskVolume;

    /**
     * @var emptyDirVolume
     */
    public $emptyDirVolume;

    /**
     * @var flexVolume
     */
    public $flexVolume;

    /**
     * @var hostPathVolume
     */
    public $hostPathVolume;

    /**
     * @var NFSVolume
     */
    public $NFSVolume;

    /**
     * @description The name of the volume.
     *
     * @example default-volume1
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the HostPath volume. Valid values:
     *
     *   Directory
     *   File
     *
     * >  Only users in the whitelist can mount HostPath volumes.
     * @example ConfigFileVolume
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configFileVolume' => 'ConfigFileVolume',
        'diskVolume'       => 'DiskVolume',
        'emptyDirVolume'   => 'EmptyDirVolume',
        'flexVolume'       => 'FlexVolume',
        'hostPathVolume'   => 'HostPathVolume',
        'NFSVolume'        => 'NFSVolume',
        'name'             => 'Name',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configFileVolume) {
            $res['ConfigFileVolume'] = null !== $this->configFileVolume ? $this->configFileVolume->toMap() : null;
        }
        if (null !== $this->diskVolume) {
            $res['DiskVolume'] = null !== $this->diskVolume ? $this->diskVolume->toMap() : null;
        }
        if (null !== $this->emptyDirVolume) {
            $res['EmptyDirVolume'] = null !== $this->emptyDirVolume ? $this->emptyDirVolume->toMap() : null;
        }
        if (null !== $this->flexVolume) {
            $res['FlexVolume'] = null !== $this->flexVolume ? $this->flexVolume->toMap() : null;
        }
        if (null !== $this->hostPathVolume) {
            $res['HostPathVolume'] = null !== $this->hostPathVolume ? $this->hostPathVolume->toMap() : null;
        }
        if (null !== $this->NFSVolume) {
            $res['NFSVolume'] = null !== $this->NFSVolume ? $this->NFSVolume->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigFileVolume'])) {
            $model->configFileVolume = configFileVolume::fromMap($map['ConfigFileVolume']);
        }
        if (isset($map['DiskVolume'])) {
            $model->diskVolume = diskVolume::fromMap($map['DiskVolume']);
        }
        if (isset($map['EmptyDirVolume'])) {
            $model->emptyDirVolume = emptyDirVolume::fromMap($map['EmptyDirVolume']);
        }
        if (isset($map['FlexVolume'])) {
            $model->flexVolume = flexVolume::fromMap($map['FlexVolume']);
        }
        if (isset($map['HostPathVolume'])) {
            $model->hostPathVolume = hostPathVolume::fromMap($map['HostPathVolume']);
        }
        if (isset($map['NFSVolume'])) {
            $model->NFSVolume = NFSVolume::fromMap($map['NFSVolume']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
