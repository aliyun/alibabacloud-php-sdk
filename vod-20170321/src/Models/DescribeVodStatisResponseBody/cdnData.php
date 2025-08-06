<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStatisResponseBody;

use AlibabaCloud\Dara\Model;

class cdnData extends Model
{
    /**
     * @var float
     */
    public $bps;

    /**
     * @var int
     */
    public $traffic;
    protected $_name = [
        'bps' => 'Bps',
        'traffic' => 'Traffic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }

        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
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
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }

        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
