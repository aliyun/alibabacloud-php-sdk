<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallDropTrafficTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $dropSession;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $totalSession;
    protected $_name = [
        'dropSession' => 'DropSession',
        'time' => 'Time',
        'totalSession' => 'TotalSession',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dropSession) {
            $res['DropSession'] = $this->dropSession;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->totalSession) {
            $res['TotalSession'] = $this->totalSession;
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
        if (isset($map['DropSession'])) {
            $model->dropSession = $map['DropSession'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TotalSession'])) {
            $model->totalSession = $map['TotalSession'];
        }

        return $model;
    }
}
