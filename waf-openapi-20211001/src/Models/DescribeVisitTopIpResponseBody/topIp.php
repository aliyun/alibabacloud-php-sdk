<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitTopIpResponseBody;

use AlibabaCloud\Dara\Model;

class topIp extends Model
{
    /**
     * @var string
     */
    public $area;
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $isp;
    protected $_name = [
        'area'  => 'Area',
        'count' => 'Count',
        'ip'    => 'Ip',
        'isp'   => 'Isp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
