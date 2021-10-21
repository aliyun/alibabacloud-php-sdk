<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\GetSupportPrincipalNameResponseBody\principals;
use AlibabaCloud\Tea\Model;

class GetSupportPrincipalNameResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var principals[]
     */
    public $principals;
    protected $_name = [
        'requestId'  => 'RequestId',
        'principals' => 'Principals',
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
        if (null !== $this->principals) {
            $res['Principals'] = [];
            if (null !== $this->principals && \is_array($this->principals)) {
                $n = 0;
                foreach ($this->principals as $item) {
                    $res['Principals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupportPrincipalNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Principals'])) {
            if (!empty($map['Principals'])) {
                $model->principals = [];
                $n                 = 0;
                foreach ($map['Principals'] as $item) {
                    $model->principals[$n++] = null !== $item ? principals::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
