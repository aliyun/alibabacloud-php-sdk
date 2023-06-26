<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database;

use AlibabaCloud\Tea\Model;

class runtimeInfo extends Model
{
    /**
     * @var mixed[][]
     */
    public $runtimeDbProperty;
    protected $_name = [
        'runtimeDbProperty' => 'RuntimeDbProperty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->runtimeDbProperty) {
            $res['RuntimeDbProperty'] = $this->runtimeDbProperty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtimeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuntimeDbProperty'])) {
            if (!empty($map['RuntimeDbProperty'])) {
                $model->runtimeDbProperty = $map['RuntimeDbProperty'];
            }
        }

        return $model;
    }
}
