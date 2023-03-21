<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetImageScanNumInPeriodResponseBody;

use AlibabaCloud\Tea\Model;

class imageScanData extends Model
{
    /**
     * @var int
     */
    public $imageScanCount;
    protected $_name = [
        'imageScanCount' => 'ImageScanCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScanCount) {
            $res['ImageScanCount'] = $this->imageScanCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageScanData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageScanCount'])) {
            $model->imageScanCount = $map['ImageScanCount'];
        }

        return $model;
    }
}
