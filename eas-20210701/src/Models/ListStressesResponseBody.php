<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListStressesResponseBody\stresses;
use AlibabaCloud\Tea\Model;

class ListStressesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stresses[]
     */
    public $stresses;
    protected $_name = [
        'requestId' => 'RequestId',
        'stresses'  => 'Stresses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stresses) {
            $res['Stresses'] = [];
            if (null !== $this->stresses && \is_array($this->stresses)) {
                $n = 0;
                foreach ($this->stresses as $item) {
                    $res['Stresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStressesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Stresses'])) {
            if (!empty($map['Stresses'])) {
                $model->stresses = [];
                $n               = 0;
                foreach ($map['Stresses'] as $item) {
                    $model->stresses[$n++] = null !== $item ? stresses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
