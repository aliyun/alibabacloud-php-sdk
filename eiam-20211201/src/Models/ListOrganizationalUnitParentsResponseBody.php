<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitParentsResponseBody\parents;
use AlibabaCloud\Tea\Model;

class ListOrganizationalUnitParentsResponseBody extends Model
{
    /**
     * @var parents[]
     */
    public $parents;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parents'   => 'Parents',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parents) {
            $res['Parents'] = [];
            if (null !== $this->parents && \is_array($this->parents)) {
                $n = 0;
                foreach ($this->parents as $item) {
                    $res['Parents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOrganizationalUnitParentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parents'])) {
            if (!empty($map['Parents'])) {
                $model->parents = [];
                $n              = 0;
                foreach ($map['Parents'] as $item) {
                    $model->parents[$n++] = null !== $item ? parents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
