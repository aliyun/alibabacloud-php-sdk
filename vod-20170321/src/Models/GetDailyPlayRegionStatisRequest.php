<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetDailyPlayRegionStatisRequest extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $mediaRegion;
    protected $_name = [
        'date' => 'Date',
        'mediaRegion' => 'MediaRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->mediaRegion) {
            $res['MediaRegion'] = $this->mediaRegion;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['MediaRegion'])) {
            $model->mediaRegion = $map['MediaRegion'];
        }

        return $model;
    }
}
