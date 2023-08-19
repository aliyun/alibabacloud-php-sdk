<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetDetailByUuidResponseBody\assetDetail;

use AlibabaCloud\Tea\Model;

class diskInfoList extends Model
{
    /**
     * @description The name of the disk.
     *
     * @example /dev/vda1
     *
     * @var string
     */
    public $diskName;

    /**
     * @description The total disk space. Unit: GB.
     *
     * @example 40
     *
     * @var int
     */
    public $totalSize;

    /**
     * @description The total disk space. Unit: bytes.
     *
     * @example 42140479488
     *
     * @var int
     */
    public $totalSizeByte;

    /**
     * @description The amount of the used disk space. Unit: GB.
     *
     * @example 2
     *
     * @var int
     */
    public $useSize;

    /**
     * @description The amount of the used disk space. Unit: bytes.
     *
     * @example 2998996992
     *
     * @var int
     */
    public $useSizeByte;
    protected $_name = [
        'diskName'      => 'DiskName',
        'totalSize'     => 'TotalSize',
        'totalSizeByte' => 'TotalSizeByte',
        'useSize'       => 'UseSize',
        'useSizeByte'   => 'UseSizeByte',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->totalSizeByte) {
            $res['TotalSizeByte'] = $this->totalSizeByte;
        }
        if (null !== $this->useSize) {
            $res['UseSize'] = $this->useSize;
        }
        if (null !== $this->useSizeByte) {
            $res['UseSizeByte'] = $this->useSizeByte;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['TotalSizeByte'])) {
            $model->totalSizeByte = $map['TotalSizeByte'];
        }
        if (isset($map['UseSize'])) {
            $model->useSize = $map['UseSize'];
        }
        if (isset($map['UseSizeByte'])) {
            $model->useSizeByte = $map['UseSizeByte'];
        }

        return $model;
    }
}
