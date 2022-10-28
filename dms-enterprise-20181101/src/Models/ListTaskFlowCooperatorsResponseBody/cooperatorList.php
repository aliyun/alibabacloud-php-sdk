<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody\cooperatorList\cooperator;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cooperator) {
            $res['Cooperator'] = [];
            if (null !== $this->cooperator && \is_array($this->cooperator)) {
                $n = 0;
                foreach ($this->cooperator as $item) {
                    $res['Cooperator'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cooperatorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cooperator'])) {
            if (!empty($map['Cooperator'])) {
                $model->cooperator = [];
                $n                 = 0;
                foreach ($map['Cooperator'] as $item) {
                    $model->cooperator[$n++] = null !== $item ? cooperator::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
