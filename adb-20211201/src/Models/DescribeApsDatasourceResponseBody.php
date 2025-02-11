<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource;

class DescribeApsDatasourceResponseBody extends Model
{
    /**
     * @var apsDatasource
     */
    public $apsDatasource;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apsDatasource' => 'ApsDatasource',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->apsDatasource) {
            $this->apsDatasource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apsDatasource) {
            $res['ApsDatasource'] = null !== $this->apsDatasource ? $this->apsDatasource->toArray($noStream) : $this->apsDatasource;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
