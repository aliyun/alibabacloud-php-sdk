<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource;
use AlibabaCloud\Tea\Model;

class DescribeApsDatasourceResponseBody extends Model
{
    /**
     * @description -
     *
     * @var apsDatasource
     */
    public $apsDatasource;

    /**
     * @example ******-**D8-5***-A***-****587
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apsDatasource' => 'ApsDatasource',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apsDatasource) {
            $res['ApsDatasource'] = null !== $this->apsDatasource ? $this->apsDatasource->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApsDatasourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsDatasource'])) {
            $model->apsDatasource = apsDatasource::fromMap($map['ApsDatasource']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
