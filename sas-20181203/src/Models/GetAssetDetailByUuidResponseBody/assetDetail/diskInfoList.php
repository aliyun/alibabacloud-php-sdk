<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetDetailByUuidResponseBody\assetDetail;

use AlibabaCloud\Dara\Model;

class diskInfoList extends Model
{
    /**
     * @var string
     */
    public $diskName;
    /**
     * @var int
     */
    public $totalSize;
    /**
     * @var int
     */
    public $totalSizeByte;
    /**
     * @var int
     */
    public $useSize;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
