<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateVolumesResponseBody;

use AlibabaCloud\Tea\Model;

class volumeIds extends Model
{
    /**
     * @var string[]
     */
    public $volumeId;
    protected $_name = [
        'volumeId' => 'VolumeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VolumeId'])) {
            if (!empty($map['VolumeId'])) {
                $model->volumeId = $map['VolumeId'];
            }
        }

        return $model;
    }
}
