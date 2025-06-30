<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeCustomLinesResponseBody\customLines\customLine;

use AlibabaCloud\Dara\Model;

class ipv4s extends Model
{
    /**
     * @var string[]
     */
    public $ipv4;
    protected $_name = [
        'ipv4' => 'Ipv4',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4)) {
            Model::validateArray($this->ipv4);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4) {
            if (\is_array($this->ipv4)) {
                $res['Ipv4'] = [];
                $n1 = 0;
                foreach ($this->ipv4 as $item1) {
                    $res['Ipv4'][$n1] = $item1;
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
        if (isset($map['Ipv4'])) {
            if (!empty($map['Ipv4'])) {
                $model->ipv4 = [];
                $n1 = 0;
                foreach ($map['Ipv4'] as $item1) {
                    $model->ipv4[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
