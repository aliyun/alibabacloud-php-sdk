<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes;

class GetClusterVolumesResponseBody extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var volumes
     */
    public $volumes;
    protected $_name = [
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'volumes' => 'Volumes',
    ];

    public function validate()
    {
        if (null !== $this->volumes) {
            $this->volumes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->volumes) {
            $res['Volumes'] = null !== $this->volumes ? $this->volumes->toArray($noStream) : $this->volumes;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Volumes'])) {
            $model->volumes = volumes::fromMap($map['Volumes']);
        }

        return $model;
    }
}
