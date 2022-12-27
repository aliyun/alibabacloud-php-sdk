<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ReInitDiskRequest extends Model
{
    /**
     * @example d-5r7v69e0bejrnzger09w71yjv
     *
     * @var string
     */
    public $diskId;

    /**
     * @example m-5rz3i231o531s4p4ozanxmgx7
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 2017-11-10
     *
     * @example 2017-11-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'diskId'  => 'DiskId',
        'imageId' => 'ImageId',
        'version' => 'Version',
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
