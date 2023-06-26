<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDatabasesResponseBody\databases\database;

use AlibabaCloud\Tea\Model;

class basicInfo extends Model
{
    /**
     * @var mixed[][]
     */
    public $basicDbProperty;
    protected $_name = [
        'basicDbProperty' => 'BasicDbProperty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicDbProperty) {
            $res['BasicDbProperty'] = $this->basicDbProperty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicDbProperty'])) {
            if (!empty($map['BasicDbProperty'])) {
                $model->basicDbProperty = $map['BasicDbProperty'];
            }
        }

        return $model;
    }
}
