<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisecSlsLogStoresResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $logStores;

    /**
     * @example D7861F61-5B61-46CE-A47C-6B19****5EB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logStores' => 'LogStores',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStores) {
            $res['LogStores'] = $this->logStores;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisecSlsLogStoresResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStores'])) {
            if (!empty($map['LogStores'])) {
                $model->logStores = $map['LogStores'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
