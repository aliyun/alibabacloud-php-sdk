<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\PublicPreCheckImageScanTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $needAuthCount;
    /**
     * @var int
     */
    public $scanImageCount;
    protected $_name = [
        'needAuthCount'  => 'NeedAuthCount',
        'scanImageCount' => 'ScanImageCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
