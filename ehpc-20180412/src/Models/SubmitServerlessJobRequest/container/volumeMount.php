<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container;

use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container\volumeMount\flexVolume;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SubmitServerlessJobRequest\container\volumeMount\NFSVolume;
use AlibabaCloud\Tea\Model;

class volumeMount extends Model
{
    /**
     * @var flexVolume
     */
    public $flexVolume;

    /**
     * @var NFSVolume
     */
    public $NFSVolume;

    /**
     * @example /data
     *
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'flexVolume' => 'FlexVolume',
        'NFSVolume'  => 'NFSVolume',
        'mountPath'  => 'MountPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flexVolume) {
            $res['FlexVolume'] = null !== $this->flexVolume ? $this->flexVolume->toMap() : null;
        }
        if (null !== $this->NFSVolume) {
            $res['NFSVolume'] = null !== $this->NFSVolume ? $this->NFSVolume->toMap() : null;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlexVolume'])) {
            $model->flexVolume = flexVolume::fromMap($map['FlexVolume']);
        }
        if (isset($map['NFSVolume'])) {
            $model->NFSVolume = NFSVolume::fromMap($map['NFSVolume']);
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
