<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteDiskRequest extends Model
{
    /**
     * @description The ID of the disk.
     *
     * @example d-5va95bg6i5f44kgkeuazyfcxm
     *
     * @var string
     */
    public $diskId;
    protected $_name = [
        'diskId' => 'DiskId',
    ];

    public function validate()
    {
    }

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
     * @return DeleteDiskRequest
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
