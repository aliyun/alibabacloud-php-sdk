<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserVipsByDomainResponseBody;

use AlibabaCloud\Dara\Model;

class vips extends Model
{
    /**
     * @var string[]
     */
    public $vip;
    protected $_name = [
        'vip' => 'Vip',
    ];

    public function validate()
    {
        if (\is_array($this->vip)) {
            Model::validateArray($this->vip);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vip) {
            if (\is_array($this->vip)) {
                $res['Vip'] = [];
                $n1 = 0;
                foreach ($this->vip as $item1) {
                    $res['Vip'][$n1] = $item1;
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
        if (isset($map['Vip'])) {
            if (!empty($map['Vip'])) {
                $model->vip = [];
                $n1 = 0;
                foreach ($map['Vip'] as $item1) {
                    $model->vip[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
