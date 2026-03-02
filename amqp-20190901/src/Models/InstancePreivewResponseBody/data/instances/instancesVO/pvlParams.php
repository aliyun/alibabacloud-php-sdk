<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances\instancesVO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances\instancesVO\pvlParams\pvlVO;

class pvlParams extends Model
{
    /**
     * @var pvlVO[]
     */
    public $pvlVO;
    protected $_name = [
        'pvlVO' => 'PvlVO',
    ];

    public function validate()
    {
        if (\is_array($this->pvlVO)) {
            Model::validateArray($this->pvlVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pvlVO) {
            if (\is_array($this->pvlVO)) {
                $res['PvlVO'] = [];
                $n1 = 0;
                foreach ($this->pvlVO as $item1) {
                    $res['PvlVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PvlVO'])) {
            if (!empty($map['PvlVO'])) {
                $model->pvlVO = [];
                $n1 = 0;
                foreach ($map['PvlVO'] as $item1) {
                    $model->pvlVO[$n1] = pvlVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
