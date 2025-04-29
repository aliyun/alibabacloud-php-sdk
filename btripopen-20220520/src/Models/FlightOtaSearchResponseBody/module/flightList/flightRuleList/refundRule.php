<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\refundRule\info;

class refundRule extends Model
{
    /**
     * @var bool
     */
    public $able;

    /**
     * @var info[]
     */
    public $info;
    protected $_name = [
        'able' => 'able',
        'info' => 'info',
    ];

    public function validate()
    {
        if (\is_array($this->info)) {
            Model::validateArray($this->info);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->able) {
            $res['able'] = $this->able;
        }

        if (null !== $this->info) {
            if (\is_array($this->info)) {
                $res['info'] = [];
                $n1 = 0;
                foreach ($this->info as $item1) {
                    $res['info'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['able'])) {
            $model->able = $map['able'];
        }

        if (isset($map['info'])) {
            if (!empty($map['info'])) {
                $model->info = [];
                $n1 = 0;
                foreach ($map['info'] as $item1) {
                    $model->info[$n1++] = info::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
