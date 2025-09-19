<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetImageScanNumInPeriodResponseBody;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageScanCount) {
            $res['ImageScanCount'] = $this->imageScanCount;
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
        if (isset($map['ImageScanCount'])) {
            $model->imageScanCount = $map['ImageScanCount'];
        }

        return $model;
    }
}
