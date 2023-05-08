<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\PublicPreCheckImageScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 6
     *
     * @var int
     */
    public $needAuthCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $scanImageCount;
    protected $_name = [
        'needAuthCount'  => 'NeedAuthCount',
        'scanImageCount' => 'ScanImageCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needAuthCount) {
            $res['NeedAuthCount'] = $this->needAuthCount;
        }
        if (null !== $this->scanImageCount) {
            $res['ScanImageCount'] = $this->scanImageCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedAuthCount'])) {
            $model->needAuthCount = $map['NeedAuthCount'];
        }
        if (isset($map['ScanImageCount'])) {
            $model->scanImageCount = $map['ScanImageCount'];
        }

        return $model;
    }
}
