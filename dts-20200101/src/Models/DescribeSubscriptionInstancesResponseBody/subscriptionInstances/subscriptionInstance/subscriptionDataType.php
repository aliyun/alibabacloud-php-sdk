<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances\subscriptionInstance;

use AlibabaCloud\Tea\Model;

class subscriptionDataType extends Model
{
    /**
     * @description Indicates whether data definition language (DDL) operations are tracked. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $DDL;

    /**
     * @description Indicates whether data manipulation language (DML) operations are tracked. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $DML;
    protected $_name = [
        'DDL' => 'DDL',
        'DML' => 'DML',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDL) {
            $res['DDL'] = $this->DDL;
        }
        if (null !== $this->DML) {
            $res['DML'] = $this->DML;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionDataType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDL'])) {
            $model->DDL = $map['DDL'];
        }
        if (isset($map['DML'])) {
            $model->DML = $map['DML'];
        }

        return $model;
    }
}
