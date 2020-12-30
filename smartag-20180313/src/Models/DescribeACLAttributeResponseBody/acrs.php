<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLAttributeResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeACLAttributeResponseBody\acrs\acr;
use AlibabaCloud\Tea\Model;

class acrs extends Model
{
    /**
     * @var acr[]
     */
    public $acr;
    protected $_name = [
        'acr' => 'Acr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acr) {
            $res['Acr'] = [];
            if (null !== $this->acr && \is_array($this->acr)) {
                $n = 0;
                foreach ($this->acr as $item) {
                    $res['Acr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Acr'])) {
            if (!empty($map['Acr'])) {
                $model->acr = [];
                $n          = 0;
                foreach ($map['Acr'] as $item) {
                    $model->acr[$n++] = null !== $item ? acr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
