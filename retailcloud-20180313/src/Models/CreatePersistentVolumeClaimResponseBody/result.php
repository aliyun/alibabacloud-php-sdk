<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\CreatePersistentVolumeClaimResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $persistentVolumeClaimId;
    protected $_name = [
        'persistentVolumeClaimId' => 'PersistentVolumeClaimId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->persistentVolumeClaimId) {
            $res['PersistentVolumeClaimId'] = $this->persistentVolumeClaimId;
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
        if (isset($map['PersistentVolumeClaimId'])) {
            $model->persistentVolumeClaimId = $map['PersistentVolumeClaimId'];
        }

        return $model;
    }
}
