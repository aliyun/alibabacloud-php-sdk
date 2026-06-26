<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody\agents;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string[]
     */
    public $fallbacks;

    /**
     * @var string
     */
    public $primary;
    protected $_name = [
        'fallbacks' => 'Fallbacks',
        'primary' => 'Primary',
    ];

    public function validate()
    {
        if (\is_array($this->fallbacks)) {
            Model::validateArray($this->fallbacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fallbacks) {
            if (\is_array($this->fallbacks)) {
                $res['Fallbacks'] = [];
                $n1 = 0;
                foreach ($this->fallbacks as $item1) {
                    $res['Fallbacks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
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
        if (isset($map['Fallbacks'])) {
            if (!empty($map['Fallbacks'])) {
                $model->fallbacks = [];
                $n1 = 0;
                foreach ($map['Fallbacks'] as $item1) {
                    $model->fallbacks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        return $model;
    }
}
