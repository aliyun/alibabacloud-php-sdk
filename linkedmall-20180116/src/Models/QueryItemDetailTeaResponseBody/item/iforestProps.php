<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponseBody\item;

use AlibabaCloud\Tea\Model;

class iforestProps extends Model
{
    /**
     * @var mixed[][]
     */
    public $iforestProp;
    protected $_name = [
        'iforestProp' => 'IforestProp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iforestProp) {
            $res['IforestProp'] = $this->iforestProp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return iforestProps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IforestProp'])) {
            if (!empty($map['IforestProp'])) {
                $model->iforestProp = $map['IforestProp'];
            }
        }

        return $model;
    }
}
