<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayRegionStatisResponseBody;

use AlibabaCloud\Dara\Model;

class dailyPlayRegionStatisList extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'date' => 'Date',
        'fileUrl' => 'FileUrl',
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

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
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

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
