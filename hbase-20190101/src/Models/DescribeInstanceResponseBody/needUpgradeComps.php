<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class needUpgradeComps extends Model
{
    /**
     * @var string[]
     */
    public $comps;
    protected $_name = [
        'comps' => 'Comps',
    ];

    public function validate()
    {
        if (\is_array($this->comps)) {
            Model::validateArray($this->comps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comps) {
            if (\is_array($this->comps)) {
                $res['Comps'] = [];
                $n1 = 0;
                foreach ($this->comps as $item1) {
                    $res['Comps'][$n1] = $item1;
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
        if (isset($map['Comps'])) {
            if (!empty($map['Comps'])) {
                $model->comps = [];
                $n1 = 0;
                foreach ($map['Comps'] as $item1) {
                    $model->comps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
