<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreatePersistentVolumeResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $persistentVolumeId;
    protected $_name = [
        'persistentVolumeId' => 'PersistentVolumeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->persistentVolumeId) {
            $res['PersistentVolumeId'] = $this->persistentVolumeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PersistentVolumeId'])) {
            $model->persistentVolumeId = $map['PersistentVolumeId'];
        }

        return $model;
    }
}
