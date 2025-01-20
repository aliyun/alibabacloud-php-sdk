<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody\cooperatorList\cooperator;

class cooperatorList extends Model
{
    /**
     * @var cooperator[]
     */
    public $cooperator;
    protected $_name = [
        'cooperator' => 'Cooperator',
    ];

    public function validate()
    {
        if (\is_array($this->cooperator)) {
            Model::validateArray($this->cooperator);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cooperator) {
            if (\is_array($this->cooperator)) {
                $res['Cooperator'] = [];
                $n1                = 0;
                foreach ($this->cooperator as $item1) {
                    $res['Cooperator'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Cooperator'])) {
            if (!empty($map['Cooperator'])) {
                $model->cooperator = [];
                $n1                = 0;
                foreach ($map['Cooperator'] as $item1) {
                    $model->cooperator[$n1++] = cooperator::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
