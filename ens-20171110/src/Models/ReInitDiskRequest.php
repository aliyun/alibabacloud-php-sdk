<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ReInitDiskRequest extends Model
{
    /**
     * @description The ID of the disk to be initialized. You can initialize only one disk at a time.
     *
     * @example d-5r7v69e0bejrnzger09w71yjv
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The ID of the image to use to create the instance.
     *
     * @example m-5rz3i231o531s4p4ozanxmgx7
     *
     * @var string
     */
    public $imageId;
    protected $_name = [
        'diskId'  => 'DiskId',
        'imageId' => 'ImageId',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReInitDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
