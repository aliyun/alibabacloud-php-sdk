<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteUdmDiskRequest extends Model
{
    /**
     * @description The disk ID.
     *
     * @example d-bp15************xy70
     *
     * @var string
     */
    public $diskId;
    protected $_name = [
        'diskId' => 'DiskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUdmDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        return $model;
    }
}
