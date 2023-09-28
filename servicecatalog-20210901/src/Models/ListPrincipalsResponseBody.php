<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListPrincipalsResponseBody\principals;
use AlibabaCloud\Tea\Model;

class ListPrincipalsResponseBody extends Model
{
    /**
     * @description The RAM entities.
     *
     * @var principals[]
     */
    public $principals;

    /**
     * @description The ID of the request.
     *
     * @example 0FEEF92D-4052-5202-87D0-3D8EC16F81BF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'principals' => 'Principals',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principals) {
            $res['Principals'] = [];
            if (null !== $this->principals && \is_array($this->principals)) {
                $n = 0;
                foreach ($this->principals as $item) {
                    $res['Principals'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPrincipalsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Principals'])) {
            if (!empty($map['Principals'])) {
                $model->principals = [];
                $n                 = 0;
                foreach ($map['Principals'] as $item) {
                    $model->principals[$n++] = null !== $item ? principals::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
