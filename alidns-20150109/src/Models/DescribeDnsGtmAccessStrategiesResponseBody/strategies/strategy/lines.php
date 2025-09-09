<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies\strategy\lines\line;

class lines extends Model
{
    /**
     * @var line[]
     */
    public $line;
    protected $_name = [
        'line' => 'Line',
    ];

    public function validate()
    {
        if (\is_array($this->line)) {
            Model::validateArray($this->line);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->line) {
            if (\is_array($this->line)) {
                $res['Line'] = [];
                $n1 = 0;
                foreach ($this->line as $item1) {
                    $res['Line'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Line'])) {
            if (!empty($map['Line'])) {
                $model->line = [];
                $n1 = 0;
                foreach ($map['Line'] as $item1) {
                    $model->line[$n1] = line::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
