<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ListProductAbilitiesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $productAbilities;

    /**
     * @example xxxxx-75ED-422E-A022-7121FA18C968
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'productAbilities' => 'ProductAbilities',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->productAbilities) {
            $res['ProductAbilities'] = $this->productAbilities;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductAbilitiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductAbilities'])) {
            if (!empty($map['ProductAbilities'])) {
                $model->productAbilities = $map['ProductAbilities'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
