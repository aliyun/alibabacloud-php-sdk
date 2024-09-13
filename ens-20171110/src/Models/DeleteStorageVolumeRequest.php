<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteStorageVolumeRequest extends Model
{
    /**
     * @description The ID of the volume.
     *
     * This parameter is required.
     * @example sv-***
     *
     * @var string
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
     * @return DeleteStorageVolumeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
